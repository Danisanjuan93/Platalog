import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import {Button, Text} from 'native-base';

export default class DrawerContent extends Component {
  render() {
    return (
    <View style={{flex: 1, backgroundColor: 'black'}}>
      <Button full dark onPress={()=>{Actions.login()}}>
        <Text>Item1</Text>
      </Button>
      <Button full dark>
        <Text>Item2</Text>
      </Button>
      <Button full dark>
        <Text>Item3</Text>
      </Button>
    </View>
    );
  }
}
