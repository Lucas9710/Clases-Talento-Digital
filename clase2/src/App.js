import React from 'react';
import logo from './logo.svg';
import './App.css';
import Componente4 from "./componente4";
import ImageComponent from "./ImageComponent";
import DescripcionComponent from "./DescripcionComponent";
import TituloComponet from "./TituloComponent";
import Tabla from './tabla';

function App() {
 // var respuestas = [];
  //var lista = ["juan Carlos", "Maria", "Gerardo"];

 // lista.forEach(function(unItem){
  // respuestas.push(<Componente4 nombre = {unItem}/>)
  
 // });

 var vector = [
  { url: 'https://placeimg.com/80/80/people?id=1', title: 'Titulo 1', description: 'Descripcion imagen 1'},
  { url: 'https://placeimg.com/80/80/people?id=2', title: 'Titulo 2', description: 'Descripcion imagen 2'},
  { url: 'https://placeimg.com/80/80/people?id=3', title: 'Titulo 3', description: 'Descripcion imagen 3'},
  { url: 'https://placeimg.com/80/80/people?id=4', title: 'Titulo 4', description: 'Descripcion imagen 4'}
];

 var respuestas = [];

  vector.forEach(element => {
    respuestas.push(<Tabla tabla = {element}/>)

    
    
  });
  
  return (
   <div>
    {respuestas}
    </div>
    );
}



export default App;
