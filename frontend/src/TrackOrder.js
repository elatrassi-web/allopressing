import React, { useState } from 'react';
import axios from 'axios';
import { Search, Package, CheckCircle, Clock, Truck, RefreshCcw } from 'lucide-react';

function TrackOrder() {
  const [orderId, setOrderId] = useState('');
  const [orderStatus, setOrderStatus] = useState(null);
  const [error, setError] = useState('');
  const [loading, setLoading] = useState(false);

  const handleTrackOrder = async (e) => {
    e.preventDefault();
    setLoading(true);
    try {
      const response = await axios.get(`${process.env.REACT_APP_API_URL || 'http://localhost:8000'}/api/track/${orderId}`);
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
    } finally {
      setLoading(false);
    }
  };

  const getStatusColor = (status) => {
    switch (status) {
      case 'Livré': return 'text-green-600 bg-green-100 border-green-200';
      case 'En cours de livraison': return 'text-blue-600 bg-blue-100 border-blue-200';
      case 'En préparation': return 'text-purple-600 bg-purple-100 border-purple-200';
      case 'Prête': return 'text-teal-600 bg-teal-100 border-teal-200';
      case 'Retourné': return 'text-red-600 bg-red-100 border-red-200';
      default: return 'text-yellow-600 bg-yellow-100 border-yellow-200'; // En attente, Collectée
    }
  };

  const getStatusIcon = (status) => {
    switch (status) {
      case 'Livré': return <CheckCircle className="w-8 h-8" />;
      case 'En cours de livraison': return <Truck className="w-8 h-8" />;
      case 'En préparation': return <RefreshCcw className="w-8 h-8 animate-spin-slow" />;
      case 'Prête': return <Package className="w-8 h-8" />;
      default: return <Clock className="w-8 h-8" />;
    }
  };

  return (
    <div className="bg-gray-50 min-h-[calc(100vh-80px)] py-12 px-4 sm:px-6 lg:px-8 flex flex-col items-center">
      <div className="max-w-md w-full">
        <div className="text-center mb-10">
          <Search className="mx-auto h-12 w-12 text-blue-500 mb-4" />
          <h2 className="text-3xl font-extrabold text-gray-900 mb-2">Suivre ma commande</h2>
          <p className="text-gray-500">Entrez votre code de suivi (ex: ORD-XXXX) pour connaître l'état de votre linge.</p>
        </div>

        <form onSubmit={handleTrackOrder} className="bg-white shadow-xl rounded-2xl p-8 mb-8">
          <div className="flex flex-col space-y-4">
            <label htmlFor="trackingCode" className="sr-only">Code de suivi</label>
            <div className="relative rounded-md shadow-sm">
              <input
                type="text"
                id="trackingCode"
                placeholder="Exemple: ORD-12345"
                value={orderId}
                onChange={(e) => setOrderId(e.target.value)}
                className="focus:ring-blue-500 focus:border-blue-500 block w-full pl-4 pr-12 sm:text-lg border-gray-300 rounded-xl py-4 bg-gray-50"
                required
              />
              <div className="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <Package className="h-6 w-6 text-gray-400" aria-hidden="true" />
              </div>
            </div>

            <button
              type="submit"
              disabled={loading}
              className="w-full flex justify-center py-4 px-4 border border-transparent rounded-xl shadow-sm text-lg font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors disabled:opacity-70"
            >
              {loading ? 'Recherche en cours...' : 'Voir le statut'}
            </button>
          </div>
          {error && (
            <div className="mt-4 bg-red-50 border-l-4 border-red-400 p-4">
              <p className="text-sm text-red-700">{error}</p>
            </div>
          )}
        </form>

        {orderStatus && (
          <div className="bg-white shadow-xl rounded-2xl p-8 transform transition-all duration-500 ease-in-out">
            <div className="flex items-center justify-between border-b pb-4 mb-6">
              <h3 className="text-xl font-bold text-gray-900">Détails de la Commande</h3>
              <span className="font-mono bg-gray-100 text-gray-800 px-3 py-1 rounded-md text-sm font-bold border">
                {orderStatus.trackingCode}
              </span>
            </div>

            <div className="flex flex-col items-center mb-8">
              <div className={`p-4 rounded-full border-4 mb-4 ${getStatusColor(orderStatus.status)}`}>
                {getStatusIcon(orderStatus.status)}
              </div>
              <h4 className={`text-2xl font-black ${getStatusColor(orderStatus.status).split(' ')[0]}`}>
                {orderStatus.status}
              </h4>
              <p className="text-gray-500 mt-2 text-center">Votre commande a été mise à jour. Nous vous enverrons un email dès qu'elle sera prête.</p>
            </div>

            {orderStatus.totalAmount && (
              <div className="bg-gray-50 p-4 rounded-xl flex justify-between items-center mb-6 border">
                <span className="text-gray-600 font-medium">Montant Total</span>
                <span className="text-2xl font-black text-gray-900">{orderStatus.totalAmount} €</span>
              </div>
            )}

            <div className="pt-4">
               <a
                 href={`https://wa.me/1234567890?text=Bonjour,%20je%20souhaite%20des%20informations%20sur%20ma%20commande%20${orderStatus.trackingCode}`}
                 target="_blank"
                 rel="noreferrer"
                 className="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-md font-bold text-white bg-[#25D366] hover:bg-[#128C7E] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#25D366] transition-colors"
               >
                 Contacter le support WhatsApp
               </a>
            </div>
          </div>
        )}
      </div>
    </div>
  );
}

export default TrackOrder;
