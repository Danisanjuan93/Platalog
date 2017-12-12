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
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/activities/' + JSON.stringify(this.props.activity.id) + '/state',
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
          <Text style={{marginHorizontal: 10, alignSelf: 'center'}}>Zona: {this.props.activity.location}</Text>
          <Text style={{marginHorizontal: 10, alignSelf: 'center'}}>Actividad: {this.props.activity.name}</Text>
          <View style={{flexDirection: 'row', marginVertical: 10}}>
            <Button rounded onPress={()=> (this.finishActivity())} style={{flex:1, marginHorizontal: 7, justifyContent: 'center', backgroundColor: '#73B9B9'}}>
              <Text style={{color: 'white'}}>Finalizar</Text>
            </Button>
          </View>
        </View>
    </View>
    );
  }
}
