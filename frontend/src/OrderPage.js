import React, { useState } from 'react';
import OrderForm from './OrderForm';
import { Shirt, CheckCircle } from 'lucide-react';

function OrderPage() {
  const [newOrder, setNewOrder] = useState(null);

  const onOrderPlaced = (order) => {
    setNewOrder(order);
  };

  return (
    <div className="bg-gray-50 min-h-[calc(100vh-80px)] py-12 px-4 sm:px-6 lg:px-8">
      <div className="max-w-4xl mx-auto">
        <div className="text-center mb-10">
          <Shirt className="mx-auto h-12 w-12 text-blue-500 mb-4" />
          <h2 className="text-3xl font-extrabold text-gray-900 mb-2">Passez votre commande</h2>
          <p className="text-gray-500 text-lg">Sélectionnez vos articles, nous nous occupons du reste.</p>
        </div>

        {newOrder ? (
          <div className="bg-white shadow-xl rounded-2xl p-10 text-center transform transition-all duration-500">
            <CheckCircle className="mx-auto h-20 w-20 text-green-500 mb-6" />
            <h3 className="text-3xl font-black text-gray-900 mb-4">Commande Confirmée !</h3>
            <p className="text-lg text-gray-600 mb-6">
              Merci pour votre confiance. Un e-mail de confirmation vient de vous être envoyé.
            </p>
            <div className="bg-gray-50 border-2 border-dashed border-gray-300 rounded-xl p-6 mb-8 inline-block">
              <span className="block text-sm text-gray-500 font-bold mb-2 uppercase tracking-wide">Votre code de suivi</span>
              <span className="text-4xl font-mono font-black text-blue-600">{newOrder.trackingCode}</span>
            </div>

            <p className="text-gray-500 mb-8">Conservez précieusement ce code pour suivre l'avancement de votre linge.</p>

            <a
              href={`https://wa.me/1234567890?text=Bonjour,%20je%20viens%20de%20passer%20la%20commande%20${newOrder.trackingCode}.`}
              target="_blank"
              rel="noreferrer"
              className="inline-flex justify-center py-4 px-8 border border-transparent rounded-full shadow-lg text-lg font-bold text-white bg-[#25D366] hover:bg-[#128C7E] transition-transform hover:scale-105"
            >
              Finaliser via WhatsApp
            </a>
          </div>
        ) : (
          <OrderForm onOrderPlaced={onOrderPlaced} />
        )}
      </div>
    </div>
  );
}

export default OrderPage;
