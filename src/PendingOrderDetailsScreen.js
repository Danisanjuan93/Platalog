import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input } from 'native-base';
import Header from './Header';
import axios from 'axios';

const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';

export default class pendingOrderDetailsScreen extends Component {

  async finishOrder(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    axios({
      method: 'patch',
      url: 'http://127.0.0.1:8000/api/orders/' + JSON.stringify(this.props.order.id) + '/state',
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      Actions.pop({refresh: {reload: Math.random()}})
    })
    .catch(function (error) {
    })
  }

  render() {
    return (
    <View style={{flex: 1, justifyContent: 'center', alignContent: 'center'}}>
      <Header backArrow title="Pedido"/>
        <View style={{flex: 1, marginVertical: 20}}>
          <Text style={{marginHorizontal: 10}}>Ordenante: {this.props.order.receiver}</Text>
          <Text style={{marginHorizontal: 10}}>Finca: {this.props.order.finca.finca_name}</Text>
          <View style={{flexDirection: 'row', marginVertical: 10}}>
            <Button onPress={()=> (this.finishOrder())} success style={{flex:1, marginHorizontal: 7, justifyContent: 'center'}}>
              <Text>Finalizar</Text>
            </Button>
          </View>
        </View>
    </View>
    );
  }
}
