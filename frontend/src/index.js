import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import Dashboard from './Dashboard';
import reportWebVitals from './reportWebVitals';

const root = ReactDOM.createRoot(document.getElementById('root'));
const path = window.location.pathname;

root.render(
  <React.StrictMode>
    {path === '/dashboard' ? <Dashboard /> : <App />}
  </React.StrictMode>
);

reportWebVitals();
