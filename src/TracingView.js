import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage} from 'react-native';
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
      fincas: []
    }
  }

  componentWillMount(){
    this.getFincas();
  }

  async getFincas(){
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
    })
    .catch(function (error) {
      AlertIOS.alert(
        "Error",
        JSON.stringify(error)
      )
    })
  }

  mapFincas(){
      return(
        <List dataArray={this.state.fincas} renderRow={(finca) =>
          <ListItem onPress={()=>{}}>
            <Left>
              <View style={{flexDirection: 'column', flex:1}}>
                <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{finca.finca.finca_name}</Text>
                <Text style={{alignSelf:'flex-start', size: 5 }}>-{finca.finca.id}</Text>
              </View>
            </Left>
            <Right>
              <View style={{flex: 1}}>
                <Progress.Circle size={50} progress={40/100} showsText={true} formatText={()=>40+'%'}/>
              </View>
            </Right>
          </ListItem>
          }>
        </List>
      );
  }
  render() {
    return (
      <View>
        {this.mapFincas()}
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
