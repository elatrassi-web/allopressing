import React, { useState, useEffect } from 'react';
import axios from 'axios';

function OrderForm({ onOrderPlaced }) {
  const [products, setProducts] = useState([]);
  const [cart, setCart] = useState({});
  const [customer, setCustomer] = useState({ name: '', email: '', phone: '', address: '' });
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState('');

  useEffect(() => {
    fetchProducts();
  }, []);

  const fetchProducts = async () => {
    try {
      const response = await axios.get(process.env.REACT_APP_API_URL + '/api/products');
      setProducts(response.data['hydra:member'] || []);
    } catch (err) {
      console.error('Failed to fetch products', err);
    }
  };

  const handleAddToCart = (product, quantity) => {
    setCart((prev) => {
      const newCart = { ...prev };
      if (quantity <= 0) {
        delete newCart[product.id];
      } else {
        newCart[product.id] = { product, quantity };
      }
      return newCart;
    });
  };

  const calculateTotal = () => {
    return Object.values(cart).reduce((total, item) => total + (parseFloat(item.product.price) * item.quantity), 0);
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    if (Object.keys(cart).length === 0) {
      setError('Veuillez ajouter au moins un produit.');
      return;
    }

    setLoading(true);
    setError('');

    const productsList = Object.values(cart).map(item => ({
      productId: item.product.id,
      name: item.product.name,
      price: item.product.price,
      quantity: item.quantity
    }));

    const orderData = {
      customer: customer,
      productsList: productsList,
      totalAmount: calculateTotal().toString()
    };

    try {
      const response = await axios.post(process.env.REACT_APP_API_URL + '/api/orders', orderData, {
        headers: { 'Content-Type': 'application/ld+json' }
      });
      onOrderPlaced(response.data);
    } catch (err) {
      console.error(err);
      setError('Erreur lors de la création de la commande.');
    } finally {
      setLoading(false);
    }
  };

  return (
    <div className="bg-white p-6 rounded-lg shadow-md mb-8">
      <h2 className="text-2xl font-bold mb-6 text-gray-800">Passer une commande</h2>

      {error && <p className="text-red-500 mb-4">{error}</p>}

      <form onSubmit={handleSubmit}>
        <div className="mb-8">
          <h3 className="text-lg font-semibold border-b pb-2 mb-4">1. Vos informations</h3>
          <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input type="text" placeholder="Nom complet" required className="border p-2 rounded" value={customer.name} onChange={(e) => setCustomer({...customer, name: e.target.value})} />
            <input type="email" placeholder="Email" required className="border p-2 rounded" value={customer.email} onChange={(e) => setCustomer({...customer, email: e.target.value})} />
            <input type="text" placeholder="Téléphone" className="border p-2 rounded" value={customer.phone} onChange={(e) => setCustomer({...customer, phone: e.target.value})} />
            <input type="text" placeholder="Adresse" required className="border p-2 rounded" value={customer.address} onChange={(e) => setCustomer({...customer, address: e.target.value})} />
          </div>
        </div>

        <div className="mb-8">
          <h3 className="text-lg font-semibold border-b pb-2 mb-4">2. Choisissez vos services</h3>
          <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            {products.map(p => (
              <div key={p.id} className="border p-4 rounded flex flex-col justify-between">
                <div>
                  <h4 className="font-bold">{p.name}</h4>
                  <p className="text-sm text-gray-500">{p.category}</p>
                  <p className="text-blue-600 font-semibold mt-2">{p.price} €</p>
                </div>
                <div className="mt-4 flex items-center">
                  <label className="mr-2 text-sm">Qté:</label>
                  <input
                    type="number"
                    min="0"
                    className="border w-16 p-1 rounded"
                    value={cart[p.id]?.quantity || 0}
                    onChange={(e) => handleAddToCart(p, parseInt(e.target.value) || 0)}
                  />
                </div>
              </div>
            ))}
          </div>
        </div>

        <div className="flex justify-between items-center bg-gray-50 p-4 rounded border">
          <p className="text-xl font-bold">Total: {calculateTotal().toFixed(2)} €</p>
          <button
            type="submit"
            disabled={loading}
            className="bg-green-600 text-white px-6 py-2 rounded font-bold hover:bg-green-700 disabled:opacity-50"
          >
            {loading ? 'Envoi...' : 'Confirmer la commande'}
          </button>
        </div>
      </form>
    </div>
  );
}

export default OrderForm;
