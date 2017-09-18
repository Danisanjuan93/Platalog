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
      <Button block dark style={styles.btn}>
        <Text>Actividad diaria</Text>
      </Button>
      <Button block dark style={styles.btn}>
        <Text>Pedidos</Text>
      </Button>
      <Button block dark style={styles.btn}>
        <Text>Recogida</Text>
      </Button>
      <Button block dark style={styles.btn}>
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
