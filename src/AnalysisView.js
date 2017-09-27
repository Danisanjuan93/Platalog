import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Text } from 'native-base';
export default class AnalysisView extends Component {

  constructor(props){
    super(props)
  }
  render() {
    return (
    <View style={{flex: 1}}>
      <Button block light style={styles.btn} onPress={()=>{Actions.ordersChart()}}>
        <Text>Actividad diaria</Text>
      </Button>
      <Button block light style={styles.btn} onPress={()=>{Actions.ordersChart()}}>
        <Text>Pedidos</Text>
      </Button>
      <Button block light style={styles.btn} onPress={()=>{Actions.ordersChart()}}>
        <Text>Recogida</Text>
      </Button>
      <Button block light style={styles.btn} onPress={()=>{Actions.ordersChart()}}>
        <Text>Ingresos</Text>
      </Button>
    </View>
    );
  }
}
const styles = StyleSheet.create({
  btn: {
      marginVertical: 15
    }
});
