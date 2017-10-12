import React, { Component } from 'react';
import {StyleSheet, View, Image, Platform, AsyncStorage, AlertIOS} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input } from 'native-base';
import Header from './Header';
import axios from 'axios';

const HEADER = "";
const ACCESS_TOKEN = '';
export default class LoginScreen extends Component {

  constructor(props){
    super(props)
    this.state={
      password: '',
      username: ''
    }
  }

  async storageToken(token){
    try {
      await AsyncStorage.setItem(ACCESS_TOKEN, "Hola");
    } catch (error) {

    }
  }

  checkuser(){
    const user = {
      username: 'dani.san',
      password: 'dani.san',
      client_id: '1_4w6d1xmib56okkco0w0oogoscsccoggk48cgsss404ccs4ksow',
      client_secret: '5re0as1q8so4ks4k0kww844o0c0gk8g0k0k4wkkss8k844cw4w',
      grant_type: 'password'
    }
    var formBody = [];
    for (var property in user) {
      var encodedKey = encodeURIComponent(property);
      var encodedValue = encodeURIComponent(user[property]);
      formBody.push(encodedKey + "=" + encodedValue);
    }
    formBody = formBody.join("&");
    axios({
      method: 'post',
      url: 'http://127.0.0.1:8000/oauth/v2/token',
      headers :{
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      data: formBody,
    })
    .then(function (response) {
      AlertIOS.alert(
          "Error en el Log In",
          JSON.stringify(response.data.access_token)
        )

    })
    .catch(function (error) {

    })
  }

  render() {
    return (
    <View style={{flex: 1}}>
      <Header title={this.props.title}/>
      <View style={{flex:1}}>
        <Image
          style={{flex:1}}
          source={{uri: 'https://facebook.github.io/react/img/logo_og.png'}}
        />
      </View>

      <Form style={{flex: 2, padding: 20}}>
        <Item>
          <Input placeholder='Usuario' value={this.state.username} onChangeText={(text)=>{this.setState({username: text})}}/>
        </Item>
        <Item last>
          <Input placeholder='Contraseña' value={this.state.password} onChangeText={(text)=>{this.setState({password: text})}} />
        </Item>
        <Button light style={styles.loginBtn} full onPress={this.checkuser}>
          <Text style={{color: 'black'}}>Continuar gestor</Text>
        </Button>
        <Button light style={styles.loginBtn} full onPress={()=>{Actions.mainWorker()}}>
          <Text style={{color: 'black'}}>Continuar trabajador</Text>
        </Button>
      </Form>
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
