import React from 'react';

export default class ImageComponent extends React.Component {
    render() {
        const element =  <p>{this.prop.imagen}</p>;
          return element;  
    }
}