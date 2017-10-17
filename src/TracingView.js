import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage, FlatList} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input,List, ListItem, Right,Left } from 'native-base';
import * as Progress from 'react-native-progress';
import axios from 'axios';

const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';

export default class TracingView extends Component {

  constructor(props){
    super(props)
    this.state={
      fincas: ''
    }
  }

  async mapFincas(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    const user = JSON.parse(await AsyncStorage.getItem(STORAGE_USER));
    axios({
      method: 'get',
      url: 'http://127.0.0.1:8000/api/fincas/' + user.User.id,
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      self.setState({fincas: response.data})
      AlertIOS.alert(
        "Correcto",
        JSON.stringify(self.state.fincas[0].finca.id)
      )
    })
    .catch(function (error) {
      AlertIOS.alert(
        "Error",
        JSON.stringify(error)
      )
    })
  }

  render() {
    return (
      <View>
        <Button light style={styles.loginBtn} full onPress={() => this.mapFincas()}>
          <Text style={{color: 'black'}}>{JSON.stringify(this.state.fincas[0].finca.id)}</Text>
        </Button>
        <List>
          <FlatList data={this.state.fincas} renderItem={({ item }) => (
            <ListItem
              title={item.finca.id}
              subTitle="Copiado"
            />
          )}/>
        </List>
      </View>
    );
  }
}

const styles = StyleSheet.create({
  loginBtn:{
    marginHorizontal: 5,
    marginVertical: 10
  }
});
