import React from 'react';
import axios from 'axios';

export default class Titulo extends React.Component{
 
    state = {
        listado : []
    }
 
    async  componentDidMount(){
       var respuestas = await axios.get('https://jsonplaceholder.typicode.com/comments');

       if(respuestas.status === 200){
        this.setState({
            listado: respuestas.data
        });
       }
   }
   
   
    render(){
        var listaMostrar = [];

        this.state.listado.forEach(function(item){
            listaMostrar.push(
            <h2>{item.name}</h2>
            );
        });

        return(
            <>
            {listaMostrar}
            </>
        );
    }
}
