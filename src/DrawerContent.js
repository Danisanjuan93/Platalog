import React, { Component } from 'react';
import { StyleSheet, View, Image } from 'react-native';
import { Actions } from 'react-native-router-flux';
import { Button, Text, Icon } from 'native-base';

export default class DrawerContent extends Component {

  render() {
    return (
      <View style={{ flex: 1 }}>
        <View style={{ flex: 1, backgroundColor: '#197741' }}>
          <Text style={{ flex: 1 }}>Prueba</Text>
        </View>
        <View style={{ flex: 2, backgroundColor: '#2FBF6D' }}>
          <Button transparent style={styles.firstBtn} onPress={() => { Actions.manageActivities() }}>
            <View style={{ flex: 1, flexDirection: 'row' }}>
              <Icon name='menu' style={styles.btnIcon} />
              <Text style={styles.btnText}>Gestionar actividades</Text>
            </View>
          </Button>
          <Button transparent style={styles.btn}>
            <View style={{ flex: 1, flexDirection: 'row' }}>
              <Icon name='menu' style={styles.btnIcon} />
              <Text style={styles.btnText} >Crear difusión</Text>
            </View>
          </Button>
          <Button transparent style={styles.btn} onPress={() => { Actions.manageUsers() }}>
            <View style={{ flex: 1, flexDirection: 'row' }}>
              <Icon name='menu' style={styles.btnIcon} />
              <Text style={styles.btnText}>Gestionar trabajadores</Text>
            </View>
          </Button>
          <View
            style={{
              borderBottomColor: 'black',
              borderBottomWidth: 1,
            }}
          />
          <Button transparent style={styles.btn} onPress={() => { Actions.root() }}>
            <View style={{ flex: 1, flexDirection: 'row' }}>
              <Icon name='menu' style={styles.btnIcon} />
              <Text style={styles.btnText}>Log Out</Text>
            </View>
          </Button>
        </View>
      </View>
    );
  }
}
const styles = StyleSheet.create({
  btn: {
    marginVertical: 10
  },
  firstBtn: {
    marginBottom: 10
  },
  btnText: {
    alignSelf: 'flex-start',
    color: 'white',
    marginLeft: 20
  },
  btnIcon: {
    alignSelf: 'flex-start',
    color: 'white'
  }
});
