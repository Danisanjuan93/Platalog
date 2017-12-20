import React, { Component } from 'react';
import { StyleSheet, View, Image } from 'react-native';
import { Actions } from 'react-native-router-flux';
import { Button, Text, Icon } from 'native-base';

export default class DrawerContent extends Component {

  render() {
    return (
      <View style={{ flex: 1 }}>
        <View style={{backgroundColor: '#008080' }}>
          <Image
            style={styles.stretch}
            source={require('./PlatalogLogo.png')}
          />
        </View>
        <View style={{ flex: 2, backgroundColor: '#59ACAC' }}>
          <Button transparent style={styles.firstBtn} onPress={() => { Actions.manageActivities() }}>
            <View style={{ flex: 1, flexDirection: 'row' }}>
              <Icon name='menu' style={styles.btnIcon} />
              <Text style={styles.btnText}>Gestionar actividades</Text>
            </View>
          </Button>
          <Button transparent style={styles.btn} onPress={()=>{Actions.manageOrders()}}>
            <View style={{ flex: 1, flexDirection: 'row' }}>
              <Icon name='menu' style={styles.btnIcon}/>
              <Text style={styles.btnText} >Gestionar Pedidos</Text>
            </View>
          </Button>
          <Button transparent style={styles.btn} onPress={() => { Actions.manageUsers() }}>
            <View style={{ flex: 1, flexDirection: 'row' }}>
              <Icon name='menu' style={styles.btnIcon} />
              <Text style={styles.btnText}>Gestionar trabajadores</Text>
            </View>
          </Button>
          <View style={{borderBottomColor: 'black', borderBottomWidth: 1}}/>
          <Button transparent style={styles.btn} onPress={() => { Actions.login() }}>
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
    marginTop: 6,
    marginLeft: 20,
    fontSize: 20
  },
  btnIcon: {
    alignSelf: 'flex-start',
    color: 'white'
  },
  stretch: {
    width: 300,
    height: 300
  }
});
