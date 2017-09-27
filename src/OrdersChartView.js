import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Text } from 'native-base';
import { Bar } from 'react-native-pathjs-charts';
import Header from './Header';
export default class OrdersChartView extends Component {

  constructor(props){
    super(props)
  this.state={
    data : [
        [{
          "v": 49,
          "name": "20/07/2017"
        }, {
          "v": 42,
          "name": "25/07/2017"
        },
        {
          "v": 69,
          "name": "2/08/2017"
        }, {
          "v": 62,
          "name": "10/08/2017"
        },
        {
          "v": 29,
          "name": "20/09/2017"
        }, {
          "v": 15,
          "name": "25/09/2017"
        }]
      ],
       options: {
        width: 300,
        height: 300,
        margin: {
          top: 20,
          left: 25,
          bottom: 50,
          right: 20
        },
        color: '#2980B9',
        gutter: 20,
        animate: {
          type: 'oneByOne',
          duration: 200,
          fillTransition: 3
        },
        axisX: {
          showAxis: true,
          showLines: true,
          showLabels: true,
          showTicks: true,
          zeroAxis: false,
          orient: 'bottom',
          label: {
            fontFamily: 'Arial',
            fontSize: 8,
            fontWeight: true,
            fill: '#34495E'
          }
        },
        axisY: {
          showAxis: true,
          showLines: true,
          showLabels: true,
          showTicks: true,
          zeroAxis: false,
          orient: 'left',
          label: {
            fontFamily: 'Arial',
            fontSize: 8,
            fontWeight: true,
            fill: '#34495E'
          }
        }
      }
    }
  }
  render() {
    return (
    <View style={{flex: 1}}>
      <Header title={this.props.title}/>
      <Bar data={this.state.data} options={this.state.options} accessorKey='v'/>
    </View>
    );
  }
}
const styles = StyleSheet.create({

});
