import React from 'react';


export default class Tabla extends React.Component{
    render(){
       
        return (
            <table border="2px solid black">
            <tr>
                <td>
                    <>
                <img src={this.props.tabla.url}></img>
                </>
                </td>
                <td>
                <>
                <h1>{this.props.tabla.title}</h1>
                </>
                <>
                <p>{this.props.tabla.description}</p>
                </>
                </td>
            </tr>
        </table>
        );
    }
}