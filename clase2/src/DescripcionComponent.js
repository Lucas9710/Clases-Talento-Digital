import React from 'react';

export default class DescripcionComponent extends React.Component {
    render() {
       
          const element =  <p>{this.prop.descripcion}</p>;
          return element;
        
    }
}