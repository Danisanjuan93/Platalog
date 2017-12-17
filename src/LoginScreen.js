import React, { Component } from 'react';
import {StyleSheet, View, Image, Platform, AsyncStorage, AlertIOS, StatusBar} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input } from 'native-base';
import Header from './Header';
import axios from 'axios';

const HEADER = "";
const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';
var formBody = [];
export default class LoginScreen extends Component {

  constructor(props){
    super(props)
    this.state={
      password: '',
      username: ''
    }
  }

  async componentDidMount() {
    await AsyncStorage.removeItem(STORAGE_KEY);
    formBody = [];
  }

  checkuser(){
    if (this.state.username.length > 0 && this.state.password.length > 0){
      var self = this;
      const user = {
        username: this.state.username,
        password: this.state.password,
        client_id: '1_5k4pwoqg8wsg0gogw080ocs40g80go404gsk4kc04kk4wo440c',
        client_secret: '4jobvaz1juw40ks048gskw8oo0c0kgww04w8408go4s4g4ccs8',
        grant_type: 'password'
      }
      this.createLoginForm(user);

      axios({
        method: 'post',
        url: 'http://bender.singularfactory.com/sf_platalog_bo/web/oauth/v2/token',
        headers :{
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        data: formBody,
      })
      .then(function (response) {
        self.storageValues(STORAGE_KEY, response.data.access_token);
        self.getUserData(self, response.data.access_token);
      })
      .catch(function (error) {
        formBody = [];
        AlertIOS.alert("Usuario y/o Contraseña inválidos")
        console.log(error);
      })
    }else{
      AlertIOS.alert("Por favor, rellene todos los campos")
    }
  }

  createLoginForm(form){
    for (var property in form) {
      var encodedKey = encodeURIComponent(property);
      var encodedValue = encodeURIComponent(form[property]);
      formBody.push(encodedKey + "=" + encodedValue);
    }
    formBody = formBody.join("&");
  }

  async storageValues(item, selectedValue){
    try  {
      await AsyncStorage.setItem(item, selectedValue);
    } catch (error) {
      console.log('AsyncStorage error: ' + error.message);
    }
  }

  async getUserData(self, token){
    axios({
      method: 'get',
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/users',
      headers :{
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      self.storageValues(STORAGE_USER, JSON.stringify(response.data));
      if (response.data.Role == '0'){
        return Actions.mainAdmin();
      }else{
        return Actions.mainWorker();
      }
    })
    .catch(function (error) {
      AlertIOS.alert(
        "Aqui",
        JSON.stringify(error)
      )
    })
  }

  render() {
    return (
    <View style={{flex: 1}}>
    <StatusBar hidden={true} />
      <Header title={this.props.title} logo/>
      <View style={{flex:1}}>
        <Image
          style={styles.stretch}
          source={require('./PlatalogLogin.png')}
        />
      </View>
      <Form style={{flex: 2, padding: 20}}>
        <Item>
          <Input placeholder='Usuario' autoCapitalize = 'none' value={this.state.username} onChangeText={(text)=>{this.setState({username: text})}}/>
        </Item>
        <Item last>
          <Input secureTextEntry placeholder='Contraseña' autoCapitalize = 'none' value={this.state.password} onChangeText={(text)=>{this.setState({password: text})}} />
        </Item>
        <Button rounded style={styles.loginBtn} onPress={() => this.checkuser()}>
          <Text style={{color: 'white'}}>Continuar</Text>
        </Button>
      </Form>
    </View>
    );
  }
}

const styles = StyleSheet.create({
  loginBtn:{
    marginHorizontal: 5,
    marginVertical: 10,
    backgroundColor: '#73B9B9',
    alignContent: 'center',
    justifyContent: 'center',
    width: '100%'
  },
  stretch: {
    bottom: '50%',
    right: '5%',
    width: 450,
    height: 450
  }
});
