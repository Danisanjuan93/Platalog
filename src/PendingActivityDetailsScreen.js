import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input } from 'native-base';
import Header from './Header'
export default class pendingActivityDetailsScreen extends Component {

  render() {
    return (
    <View style={{flex: 1, justifyContent: 'center', alignContent: 'center'}}>
      <Header title={this.props.content.name}/>
        <View style={{flex: 1, marginVertical: 20}}>
          <Text style={{marginHorizontal: 10}}>Actividad: {this.props.content.name}</Text>
          <Text style={{marginHorizontal: 10}}>Zona: {this.props.content.zone}</Text>
          <View style={{flexDirection: 'row', marginVertical: 10}}>
            <Button success style={{flex:1, marginHorizontal: 7, justifyContent: 'center'}}>
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
