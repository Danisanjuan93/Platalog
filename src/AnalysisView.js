import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button, Text, Icon } from 'native-base';
export default class AnalysisView extends Component {

  constructor(props){
    super(props)
  }
  render() {
    return (
      <View style={styles.verticalWrapper}>

          <View style={styles.horizontalWrapper}>
            <View style={styles.verticalWrapper} >
              <Button block light style={styles.btn} onPress={() => { Actions.activitiesChart() }}>
                <View style={styles.verticalWrapper}>
                  <Icon name='ios-podium-outline' style={{ alignSelf: 'center', color: 'white', fontSize: 100 }} />
                  <Text style={{ color: 'white', alignSelf: 'center', fontWeight: 'bold' }}>Actividad diaria</Text>
                </View>

              </Button>
            </View>
            <View style={styles.verticalWrapper} >
              <Button block light style={styles.btn} onPress={() => { Actions.ordersChart() }}>
                <View style={styles.verticalWrapper}>
                  <Icon name='ios-podium-outline' style={{ alignSelf: 'center', color: 'white', fontSize: 100 }} />
                  <Text style={{ color: 'white', alignSelf: 'center', fontWeight: 'bold' }}>Pedidos</Text>
                </View>
              </Button>
            </View>
          </View>

          <View style={styles.horizontalWrapper}>
            <View style={styles.verticalWrapper} >
              <Button block light style={styles.btn} onPress={() => { Actions.benefitsChart() }}>
                <View style={styles.verticalWrapper}>
                  <Icon name='ios-podium-outline' style={{ alignSelf: 'center', color: 'white', fontSize: 100}} />
                  <Text style={{ color: 'white', alignSelf: 'center', fontWeight: 'bold' }}>Ingresos</Text>
                </View>
              </Button>
            </View>
            <View style={styles.verticalWrapper} >

            </View>
          </View>

          <View style={styles.horizontalWrapper}>

          </View>
        </View>
    );
  }
}

const styles = StyleSheet.create({
  btn: {
    marginVertical: 15,
    marginHorizontal: 15,
    flex: 1,
    backgroundColor: '#73B9B9'
  },
  textBold: {
    fontWeight: 'bold'
  },
  horizontalWrapper: {
    flex: 1,
    flexDirection: 'row'
  },
  verticalWrapper: {
    flex: 1,
    flexDirection: 'column'
  }
});
