import React, { Component } from 'react';
import {StyleSheet,View, Image} from 'react-native';
import {Actions} from 'react-native-router-flux';
import {Button, Text} from 'native-base';

export default class DrawerContent extends Component {

  render() {
    return (
    <View style={{flex: 1, backgroundColor: 'black'}}>
      <View style={{flex:1}}>
        <Image
          style={{flex:1}}
          source={{uri: 'https://facebook.github.io/react/img/logo_og.png'}}
        />
      </View>
      <View style={{flex:2}}>
        <Button block light style={styles.firstBtn} onPress={()=>{Actions.manageActivities()}}>
          <Text>Gestionar actividades</Text>
        </Button>
        <Button block light style={styles.btn} onPress={()=>{Actions.manageOrders()}}>
          <Text>Gestionar Pedidos</Text>
        </Button>
        <Button block light style={styles.btn} onPress={()=>{Actions.manageUsers()}}>
          <Text>Gestionar trabajadores</Text>
        </Button>
        <Button block light style={styles.btn} onPress={()=>{Actions.root()}}>
          <Text>Log Out</Text>
        </Button>
      </View>
    </View>
    );
  }
}
const styles = StyleSheet.create({
  btn:{
    marginVertical: 10
  },
firstBtn:{
  marginBottom: 10
}
});
