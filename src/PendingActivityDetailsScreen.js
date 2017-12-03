import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input } from 'native-base';
import Header from './Header';
import axios from 'axios';

const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';
export default class pendingActivityDetailsScreen extends Component {

  async finishActivity(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    axios({
      method: 'patch',
      url: 'http://127.0.0.1:8000/api/activities/' + JSON.stringify(this.props.activity.id) + '/state',
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
      <Header backArrow title={this.props.activity.name}/>
        <View style={{flex: 1, marginVertical: 20}}>
          <Text style={{marginHorizontal: 10}}>Actividad: {this.props.activity.name}</Text>
          <Text style={{marginHorizontal: 10}}>Zona: {this.props.activity.location}</Text>
          <View style={{flexDirection: 'row', marginVertical: 10}}>
            <Button onPress={()=> (this.finishActivity())} success style={{flex:1, marginHorizontal: 7, justifyContent: 'center'}}>
              <Text>Finalizar</Text>
            </Button>
            <Button danger style={{flex:1, marginHorizontal: 7, justifyContent: 'center'}}>
              <Text>Incidencia</Text>
            </Button>
          </View>
        </View>
    </View>
    );
  }
}
