import React, { useState } from 'react';
import axios from 'axios';
import OrderForm from './OrderForm';

function App() {
  const [orderId, setOrderId] = useState('');
  const [orderStatus, setOrderStatus] = useState(null);
  const [error, setError] = useState('');
  const [newOrder, setNewOrder] = useState(null);
  const [showOrderForm, setShowOrderForm] = useState(false);

  const handleTrackOrder = async (e) => {
    e.preventDefault();
    try {
      const response = await axios.get(`http://localhost:8000/api/track/${orderId}`);
      if (response.data) {
        setOrderStatus(response.data);
        setError('');
      } else {
        setOrderStatus(null);
        setError('Commande introuvable.');
      }
    } catch (err) {
      setError('Erreur lors de la récupération de la commande. Veuillez vérifier votre code.');
      setOrderStatus(null);
    }
  };

  const onOrderPlaced = (order) => {
    setNewOrder(order);
    setShowOrderForm(false);
  };

  return (
    <div className="min-h-screen bg-gray-50 flex flex-col items-center p-8">
      <header className="mb-8 w-full max-w-4xl flex justify-between items-center">
        <div>
          <h1 className="text-4xl font-extrabold text-blue-900 mb-2">Allo Pressing</h1>
          <p className="text-gray-600">Votre pressing de qualité, avec suivi en direct.</p>
        </div>
        <button
          onClick={() => setShowOrderForm(!showOrderForm)}
          className="bg-blue-600 text-white font-semibold py-2 px-6 rounded shadow hover:bg-blue-700 transition"
        >
          {showOrderForm ? 'Retour au suivi' : 'Passer une commande'}
        </button>
      </header>

      <main className="w-full max-w-4xl">
        {newOrder && (
          <div className="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-8 text-center">
            <strong className="font-bold">Commande confirmée ! </strong>
            <span className="block sm:inline">Votre code de suivi est : <span className="font-mono bg-white p-1 rounded font-bold">{newOrder.trackingCode}</span>. Vous allez recevoir un email de confirmation.</span>
            <div className="mt-4">
              <a
                href={`https://wa.me/1234567890?text=Bonjour,%20je%20viens%20de%20passer%20la%20commande%20${newOrder.trackingCode}%20et%20je%20souhaite%20l'envoyer%20via%20WhatsApp.`}
                target="_blank"
                rel="noreferrer"
                className="inline-block bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600 font-bold"
              >
                Envoyer la commande sur WhatsApp
              </a>
            </div>
          </div>
        )}

        {showOrderForm ? (
          <OrderForm onOrderPlaced={onOrderPlaced} />
        ) : (
          <div className="bg-white rounded-lg shadow-md p-6 max-w-md mx-auto">
            <h2 className="text-2xl font-bold mb-6 text-gray-800">Suivre ma commande</h2>
            <form onSubmit={handleTrackOrder} className="flex flex-col space-y-4">
              <input
                type="text"
                placeholder="Code de suivi (ex: ORD-1234)"
                value={orderId}
                onChange={(e) => setOrderId(e.target.value)}
                className="border border-gray-300 p-3 rounded focus:outline-none focus:border-blue-500"
                required
              />
              <button
                type="submit"
                className="bg-blue-600 text-white font-semibold p-3 rounded hover:bg-blue-700 transition"
              >
                Vérifier le statut
              </button>
            </form>

            {error && <p className="mt-4 text-red-500">{error}</p>}

            {orderStatus && (
              <div className="mt-6 p-4 border border-green-200 bg-green-50 rounded">
                <h3 className="font-bold text-green-800 mb-2">Statut de la commande :</h3>
                <p className="text-gray-800">Code: <span className="font-mono">{orderStatus.trackingCode}</span></p>
                <p className="text-gray-800 font-bold mt-1">État: {orderStatus.status}</p>
                {orderStatus.totalAmount && (
                  <p className="text-gray-800 mt-1">Total: {orderStatus.totalAmount} €</p>
                )}
                <div className="mt-4">
                  <a
                    href={`https://wa.me/1234567890?text=Bonjour,%20je%20souhaite%20des%20informations%20sur%20ma%20commande%20${orderStatus.trackingCode}`}
                    target="_blank"
                    rel="noreferrer"
                    className="inline-block bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600 text-sm"
                  >
                    Contacter sur WhatsApp
                  </a>
                </div>
              </div>
            )}
          </div>
        )}
      </main>
    </div>
  );
}

export default App;
