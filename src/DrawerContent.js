import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import {Button, Text} from 'native-base';

export default class DrawerContent extends Component {
  render() {
    return (
    <View style={{flex: 1, backgroundColor: 'black'}}>
      <Button block light onPress={()=>{Actions.manageActivities()}}>
        <Text>Gestionar actividades</Text>
      </Button>
      <Button block light>
        <Text>Crear difusión</Text>
      </Button>
    </View>
    );
  }
}
