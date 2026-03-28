import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import Home from './Home';
import OrderPage from './OrderPage';
import TrackOrder from './TrackOrder';
import Dashboard from './Dashboard';
import Navbar from './Navbar';

function App() {
  return (
    <Router>
      <div className="flex flex-col min-h-screen">
        <Navbar />
        <main className="flex-grow">
          <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/order" element={<OrderPage />} />
            <Route path="/track" element={<TrackOrder />} />
            <Route path="/dashboard" element={<Dashboard />} />
          </Routes>
        </main>

        {/* Simple Footer */}
        <footer className="bg-gray-900 text-gray-400 py-8 text-center text-sm">
          <p className="mb-2">&copy; {new Date().getFullYear()} Allo Pressing. Tous droits réservés.</p>
          <div className="flex justify-center gap-4">
            <a href="#" className="hover:text-white transition">Politique de confidentialité</a>
            <a href="#" className="hover:text-white transition">CGV</a>
            <a href="#" className="hover:text-white transition">Contact</a>
          </div>
        </footer>
      </div>
    </Router>
  );
}

export default App;
