import React from 'react';
import logo from './logo.svg';
import './App.css';
import Titulo from './componente3';
import Imagen from './componente2';
import Descripcion from './componente1';



function App() {
  return (
    <table>
    <tr>
      <td><Imagen></Imagen></td>
    </tr>
    <tr>
      <td><Titulo></Titulo></td>
      <td><Descripcion></Descripcion>
      </td>
    </tr>

    </table>
  );
}

export default App;
