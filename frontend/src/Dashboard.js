import React, { useState, useEffect } from 'react';
import axios from 'axios';

function Dashboard() {
  const [token, setToken] = useState(localStorage.getItem('token'));
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [loginError, setLoginError] = useState('');

  const [activeTab, setActiveTab] = useState('orders');
  const [orders, setOrders] = useState([]);
  const [products, setProducts] = useState([]);
  const [customers, setCustomers] = useState([]);
  const [loading, setLoading] = useState(false);

  // New Product Form State
  const [showProductForm, setShowProductForm] = useState(false);
  const [newProduct, setNewProduct] = useState({ name: '', category: '', price: '' });

  useEffect(() => {
    if (token) {
      axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
      fetchData();
    }
  }, [token, activeTab]);

  const handleLogin = async (e) => {
    e.preventDefault();
    try {
      const response = await axios.post(process.env.REACT_APP_API_URL + '/api/login_check', {
        email,
        password
      });
      const jwt = response.data.token;
      setToken(jwt);
      localStorage.setItem('token', jwt);
      setLoginError('');
    } catch (err) {
      setLoginError('Email ou mot de passe incorrect');
    }
  };

  const handleLogout = () => {
    setToken(null);
    localStorage.removeItem('token');
    delete axios.defaults.headers.common['Authorization'];
  };

  const fetchData = async () => {
    setLoading(true);
    try {
      if (activeTab === 'orders') {
        const response = await axios.get(process.env.REACT_APP_API_URL + '/api/orders');
        setOrders(response.data['hydra:member']);
      } else if (activeTab === 'products') {
        const response = await axios.get(process.env.REACT_APP_API_URL + '/api/products');
        setProducts(response.data['hydra:member']);
      } else if (activeTab === 'customers') {
        const response = await axios.get(process.env.REACT_APP_API_URL + '/api/customers');
        setCustomers(response.data['hydra:member']);
      }
    } catch (error) {
      console.error(`Failed to fetch ${activeTab}`, error);
      if (error.response && error.response.status === 401) {
        handleLogout();
      }
    }
    setLoading(false);
  };

  const updateOrderStatus = async (orderId, newStatus) => {
    try {
      await axios.patch(
        `http://localhost:8000/api/orders/${orderId}`,
        { status: newStatus },
        { headers: { 'Content-Type': 'application/merge-patch+json' } }
      );
      fetchData();
    } catch (error) {
      console.error('Failed to update status', error);
    }
  };

  const handleAddProduct = async (e) => {
    e.preventDefault();
    try {
      await axios.post(process.env.REACT_APP_API_URL + '/api/products', newProduct, {
        headers: { 'Content-Type': 'application/ld+json' }
      });
      setShowProductForm(false);
      setNewProduct({ name: '', category: '', price: '' });
      fetchData();
    } catch (error) {
      console.error('Failed to add product', error);
    }
  };

  const handleDeleteProduct = async (productId) => {
    try {
      await axios.delete(`http://localhost:8000/api/products/${productId}`);
      fetchData();
    } catch (error) {
      console.error('Failed to delete product', error);
    }
  };

  if (!token) {
    return (
      <div className="min-h-screen bg-gray-100 flex items-center justify-center">
        <div className="bg-white p-8 rounded shadow-md w-full max-w-sm">
          <h2 className="text-2xl font-bold mb-6 text-center text-gray-800">Connexion Admin</h2>
          {loginError && <p className="text-red-500 mb-4 text-center">{loginError}</p>}
          <form onSubmit={handleLogin} className="flex flex-col space-y-4">
            <input
              type="email"
              placeholder="Email"
              className="border border-gray-300 p-2 rounded"
              value={email}
              onChange={(e) => setEmail(e.target.value)}
              required
            />
            <input
              type="password"
              placeholder="Mot de passe"
              className="border border-gray-300 p-2 rounded"
              value={password}
              onChange={(e) => setPassword(e.target.value)}
              required
            />
            <button type="submit" className="bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Se connecter</button>
          </form>
        </div>
      </div>
    );
  }

  return (
    <div className="min-h-screen bg-gray-100 p-8">
      <div className="flex justify-between items-center mb-8">
        <h1 className="text-3xl font-bold text-gray-800">Tableau de Bord Allo Pressing</h1>
        <button onClick={handleLogout} className="bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600">Déconnexion</button>
      </div>

      <div className="flex border-b border-gray-300 mb-6">
        <button className={`px-4 py-2 font-semibold text-sm ${activeTab === 'orders' ? 'border-b-2 border-blue-500 text-blue-600' : 'text-gray-500 hover:text-blue-500'}`} onClick={() => setActiveTab('orders')}>Commandes</button>
        <button className={`px-4 py-2 font-semibold text-sm ${activeTab === 'products' ? 'border-b-2 border-blue-500 text-blue-600' : 'text-gray-500 hover:text-blue-500'}`} onClick={() => setActiveTab('products')}>Produits & Prix</button>
        <button className={`px-4 py-2 font-semibold text-sm ${activeTab === 'customers' ? 'border-b-2 border-blue-500 text-blue-600' : 'text-gray-500 hover:text-blue-500'}`} onClick={() => setActiveTab('customers')}>Clients</button>
      </div>

      {loading ? (
        <div className="flex justify-center mt-10"><p className="text-gray-500">Chargement des données...</p></div>
      ) : (
        <>
          {activeTab === 'orders' && (
            <div className="bg-white shadow-md rounded my-6 overflow-x-auto">
              <table className="min-w-max w-full table-auto">
                <thead>
                  <tr className="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th className="py-3 px-6 text-left">Code Suivi</th>
                    <th className="py-3 px-6 text-left">Client</th>
                    <th className="py-3 px-6 text-center">Statut</th>
                    <th className="py-3 px-6 text-center">Montant</th>
                    <th className="py-3 px-6 text-center">Actions</th>
                  </tr>
                </thead>
                <tbody className="text-gray-600 text-sm font-light">
                  {orders.map((order) => (
                    <tr key={order.id} className="border-b border-gray-200 hover:bg-gray-100">
                      <td className="py-3 px-6 text-left whitespace-nowrap"><span className="font-medium">{order.trackingCode}</span></td>
                      <td className="py-3 px-6 text-left"><span>{order.customer ? order.customer.name : 'N/A'}</span></td>
                      <td className="py-3 px-6 text-center"><span className="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{order.status}</span></td>
                      <td className="py-3 px-6 text-center"><span>{order.totalAmount} €</span></td>
                      <td className="py-3 px-6 text-center">
                        <select
                          className="border border-gray-300 rounded px-2 py-1 text-xs"
                          value={order.status}
                          onChange={(e) => updateOrderStatus(order.id, e.target.value)}
                        >
                          <option value="En attente">En attente</option>
                          <option value="Collectée">Collectée</option>
                          <option value="En préparation">En préparation</option>
                          <option value="Prête">Prête</option>
                          <option value="En cours de livraison">En cours de livraison</option>
                          <option value="Livré">Livré</option>
                          <option value="Retourné">Retourné</option>
                        </select>
                      </td>
                    </tr>
                  ))}
                  {orders.length === 0 && <tr><td colSpan="5" className="text-center py-4">Aucune commande trouvée.</td></tr>}
                </tbody>
              </table>
            </div>
          )}

          {activeTab === 'products' && (
            <div className="bg-white shadow-md rounded my-6 overflow-x-auto">
              <div className="flex justify-between p-4 bg-gray-50 border-b">
                <h2 className="text-lg font-semibold text-gray-700">Liste des Produits</h2>
                <button
                  onClick={() => setShowProductForm(!showProductForm)}
                  className="bg-blue-500 text-white px-3 py-1 rounded shadow text-sm hover:bg-blue-600"
                >
                  {showProductForm ? 'Annuler' : '+ Ajouter Produit'}
                </button>
              </div>

              {showProductForm && (
                <div className="p-4 border-b bg-blue-50">
                  <form onSubmit={handleAddProduct} className="flex flex-col sm:flex-row gap-4 items-end">
                    <div className="flex flex-col w-full">
                      <label className="text-xs font-bold mb-1">Nom</label>
                      <input type="text" required className="border p-2 rounded" value={newProduct.name} onChange={e => setNewProduct({...newProduct, name: e.target.value})} />
                    </div>
                    <div className="flex flex-col w-full">
                      <label className="text-xs font-bold mb-1">Catégorie</label>
                      <input type="text" required className="border p-2 rounded" value={newProduct.category} onChange={e => setNewProduct({...newProduct, category: e.target.value})} />
                    </div>
                    <div className="flex flex-col w-full">
                      <label className="text-xs font-bold mb-1">Prix (€)</label>
                      <input type="number" step="0.01" required className="border p-2 rounded" value={newProduct.price} onChange={e => setNewProduct({...newProduct, price: e.target.value})} />
                    </div>
                    <button type="submit" className="bg-green-500 text-white px-4 py-2 rounded h-10 hover:bg-green-600">Enregistrer</button>
                  </form>
                </div>
              )}

              <table className="min-w-max w-full table-auto">
                <thead>
                  <tr className="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th className="py-3 px-6 text-left">ID</th>
                    <th className="py-3 px-6 text-left">Nom</th>
                    <th className="py-3 px-6 text-left">Catégorie</th>
                    <th className="py-3 px-6 text-center">Prix</th>
                    <th className="py-3 px-6 text-center">Actions</th>
                  </tr>
                </thead>
                <tbody className="text-gray-600 text-sm font-light">
                  {products.map((product) => (
                    <tr key={product.id} className="border-b border-gray-200 hover:bg-gray-100">
                      <td className="py-3 px-6 text-left whitespace-nowrap">{product.id}</td>
                      <td className="py-3 px-6 text-left font-medium">{product.name}</td>
                      <td className="py-3 px-6 text-left">{product.category}</td>
                      <td className="py-3 px-6 text-center">{product.price} €</td>
                      <td className="py-3 px-6 text-center">
                         <button onClick={() => handleDeleteProduct(product.id)} className="text-red-500 hover:text-red-700 text-xs font-bold border border-red-500 px-2 py-1 rounded">Supprimer</button>
                      </td>
                    </tr>
                  ))}
                  {products.length === 0 && <tr><td colSpan="5" className="text-center py-4">Aucun produit trouvé.</td></tr>}
                </tbody>
              </table>
            </div>
          )}

          {activeTab === 'customers' && (
            <div className="bg-white shadow-md rounded my-6 overflow-x-auto">
              <table className="min-w-max w-full table-auto">
                <thead>
                  <tr className="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th className="py-3 px-6 text-left">ID</th>
                    <th className="py-3 px-6 text-left">Nom</th>
                    <th className="py-3 px-6 text-left">Email</th>
                    <th className="py-3 px-6 text-left">Téléphone</th>
                  </tr>
                </thead>
                <tbody className="text-gray-600 text-sm font-light">
                  {customers.map((customer) => (
                    <tr key={customer.id} className="border-b border-gray-200 hover:bg-gray-100">
                      <td className="py-3 px-6 text-left whitespace-nowrap">{customer.id}</td>
                      <td className="py-3 px-6 text-left font-medium">{customer.name}</td>
                      <td className="py-3 px-6 text-left">{customer.email}</td>
                      <td className="py-3 px-6 text-left">{customer.phone || 'N/A'}</td>
                    </tr>
                  ))}
                  {customers.length === 0 && <tr><td colSpan="4" className="text-center py-4">Aucun client trouvé.</td></tr>}
                </tbody>
              </table>
            </div>
          )}
        </>
      )}
    </div>
  );
}

export default Dashboard;
