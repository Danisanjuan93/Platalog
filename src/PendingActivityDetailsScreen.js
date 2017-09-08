import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input } from 'native-base';
import Header from './Header'
export default class pendingActivityDetailsScreen extends Component {

  render() {
    return (
    <View style={{flex: 1}}>
      <Header title={this.props.content.name}/>
      <Text>{this.props.content.name}</Text>
      <Text>{this.props.content.worker}</Text>
      <Text>{this.props.content.zone}</Text>
      <View style={{flexDirection: 'row'}}>
        <Button success style={{flex:1, marginHorizontal: 5, justifyContent: 'center'}}>
          <Text>Finalizar</Text>
        </Button>
        <Button danger style={{flex:1, marginHorizontal: 5, justifyContent: 'center'}}>
          <Text>Incidencia</Text>
        </Button>
      </View>
    </View>
    );
  }
}
