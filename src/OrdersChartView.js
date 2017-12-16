import React, { Component } from 'react';
import {StyleSheet, View, AsyncStorage, AlertIOS } from 'react-native';
import { Actions } from 'react-native-router-flux';
import { Button, Text } from 'native-base';
import { Bar } from 'react-native-pathjs-charts';
import Header from './Header';
import axios from 'axios';

const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';

export default class OrdersChartView extends Component {

  constructor(props){
    super(props)
    this.state={
      Data: [],
      graphic: [],
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
      },
      orders: []
    }
  }

  async componentWillMount(){
    this.getOrders();
  }

  async getOrders(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    axios({
      method: 'get',
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/orders/graphic',
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      self.setState({orders: [response.data]});
      self.countOrders();
    })
    .catch(function (error) {
      AlertIOS.alert("No hay datos que mostrar")
    })
  }

  countOrders(){
    let pos;
    let count = 0;
    let key;
    for (let i = 0; i < this.state.orders[0].length; i++){
      key = this.state.orders[0][i];
      for (let j = i; j < this.state.orders[0].length; j++){
        if (key.deleted_at.split('-')[1] == this.state.orders[0][j].deleted_at.split('-')[1]){
          count = count + 1;
          pos = j;
        }
      }
      this.setState({Data: this.state.Data.concat({v: count, name: this.state.orders[0][i].deleted_at.split('-')[0] + '-' + this.state.orders[0][i].deleted_at.split('-')[1]})});
      count = 0;
      i = pos;
    }
    this.setState({graphic: [this.state.Data]});
  }

  render() {
    return (
    <View style={{flex: 1}}>
      <Header backArrow title={this.props.title}/>
      <Text style={{alignSelf: 'center', paddingTop: '5%', fontWeight: 'bold', fontSize: 20}}>Representación de los Pedidos</Text>
      <Text style={{alignSelf: 'center', paddingTop: '2%', fontSize: 20}}>Pedidos - Tiempo</Text>
      <Bar data={this.state.graphic} options={this.state.options} accessorKey='v'/>
    </View>
    );
  }
}
const styles = StyleSheet.create({

});
