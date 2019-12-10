import React from 'react';

export default class Descripcion extends React.Component{
  
    state={
        fecha: new Date()
    }

    constructor(props){
        super(props);
        this.cambiarFecha = this.cambiarFecha.bind(this);
    
    }

    cambiarFecha(){
        this.setState({
            fecha: new Date()
        });
    }

    componentDidMount(){
        console.log("pase por el componente Did mount de componente 3");
        }

    render(){

        return(
            <React.Fragment>
                <h2>Descripcion</h2>
                <h2>{this.state.fecha.toString()}</h2>  
            <button onClick={this.cambiarFecha} >Cambiar</button>
          </React.Fragment>
        );
    }
}  