import React from 'react';
import { Link } from 'react-router-dom';
import { Shirt, Sparkles, Truck, Phone, Star, ShieldCheck } from 'lucide-react';

function Home() {
  const categories = [
    { title: "Femme", image: "https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?auto=format&fit=crop&q=80&w=800" },
    { title: "Homme", image: "https://images.unsplash.com/photo-1593030761757-71fae45fa0e7?auto=format&fit=crop&q=80&w=800" },
    { title: "Enfant - Bébé", image: "https://images.unsplash.com/photo-1519272338424-69752f4c9a2c?auto=format&fit=crop&q=80&w=800" },
    { title: "Maison", image: "https://images.unsplash.com/photo-1615876234886-fd9a39fda97f?auto=format&fit=crop&q=80&w=800" },
    { title: "Tapis", image: "https://images.unsplash.com/photo-1600166898405-da9535204843?auto=format&fit=crop&q=80&w=800" },
    { title: "Canapé - Matelas", image: "https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&q=80&w=800" },
  ];

  const expertises = [
    { title: "Pressing haute qualité", icon: <Sparkles className="w-10 h-10 text-blue-600 mb-4" />, desc: "Une technologie de pointe pour un nettoyage irréprochable de tous vos vêtements." },
    { title: "Blanchisserie", icon: <Shirt className="w-10 h-10 text-blue-600 mb-4" />, desc: "Un nettoyage professionnel pour rendre impeccable vos draps, nappes, couettes..." },
    { title: "Spécialiste cuir et daim", icon: <ShieldCheck className="w-10 h-10 text-blue-600 mb-4" />, desc: "Vos vêtements en cuir sont uniques et nécessitent un traitement sur mesure." },
  ];

  return (
    <div className="bg-gray-50 min-h-screen">
      {/* Hero Section */}
      <section className="relative bg-blue-900 text-white overflow-hidden">
        <div className="absolute inset-0">
          <img
            src="https://images.unsplash.com/photo-1582735689369-4fe89db7114c?auto=format&fit=crop&q=80&w=1920"
            alt="Pressing Service"
            className="w-full h-full object-cover opacity-20"
          />
        </div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 flex flex-col items-center text-center">
          <h1 className="text-4xl md:text-6xl font-extrabold tracking-tight mb-6">
            Allo Pressing, <br/>
            <span className="text-blue-300">votre linge entre de bonnes mains.</span>
          </h1>
          <p className="text-xl md:text-2xl text-blue-100 max-w-3xl mb-10">
            Qualité premium, collecte et livraison à domicile. Confiez-nous vos vêtements, nous nous occupons du reste.
          </p>
          <div className="flex flex-col sm:flex-row gap-4">
            <Link to="/order" className="bg-blue-500 hover:bg-blue-400 text-white px-8 py-4 rounded-full font-bold text-lg shadow-lg transition-transform transform hover:scale-105 flex items-center justify-center">
              <Truck className="w-6 h-6 mr-2" />
              Commander maintenant
            </Link>
            <Link to="/track" className="bg-white text-blue-900 hover:bg-gray-100 px-8 py-4 rounded-full font-bold text-lg shadow-lg transition-transform transform hover:scale-105 flex items-center justify-center">
              <Star className="w-6 h-6 mr-2" />
              Suivre ma commande
            </Link>
          </div>
        </div>
      </section>

      {/* Services Grid (Replica of old cardhome.css logic) */}
      <section className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div className="text-center mb-16">
          <h2 className="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Nos Catégories</h2>
          <p className="mt-4 text-lg text-gray-500">Un service sur-mesure pour chaque type de textile.</p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {categories.map((cat, index) => (
            <Link key={index} to="/order" className="group relative block w-full h-80 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
              <img
                src={cat.image}
                alt={cat.title}
                className="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
              />
              <div className="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
              <div className="absolute bottom-0 left-0 p-6">
                <p className="text-blue-300 text-sm font-semibold uppercase tracking-wider mb-1">Catégorie</p>
                <h3 className="text-white text-2xl font-bold">{cat.title}</h3>
              </div>
            </Link>
          ))}
        </div>
      </section>

      {/* Expertise Section */}
      <section className="bg-white py-20">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
              Nous traitons vos linges avec…amour !
            </h2>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-10">
            {expertises.map((exp, index) => (
              <div key={index} className="flex flex-col items-center text-center p-8 rounded-2xl bg-gray-50 border border-gray-100 shadow-sm hover:shadow-md transition">
                {exp.icon}
                <h4 className="text-xl font-bold text-gray-900 mb-3">{exp.title}</h4>
                <p className="text-gray-600 leading-relaxed">{exp.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Call to Action Footer Area */}
      <section className="bg-blue-900 text-white py-16">
        <div className="max-w-4xl mx-auto text-center px-4">
          <h2 className="text-3xl font-bold mb-6">Prêt à nous confier votre linge ?</h2>
          <p className="text-lg text-blue-200 mb-8">Un livreur se déplace chez vous pour récupérer vos articles.</p>
          <Link to="/order" className="inline-block bg-white text-blue-900 px-8 py-3 rounded-full font-bold text-lg hover:bg-gray-100 transition shadow-lg">
            Réserver une collecte
          </Link>
        </div>
      </section>
    </div>
  );
}

export default Home;
