import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input } from 'native-base';
import Header from './Header'
export default class LoginScreen extends Component {

  constructor(props){
    super(props)
    this.state={
      password: '',
      username: ''
    }
  }
  render() {
    return (
    <View style={{flex: 1}}>
      <Header title={this.props.title}/>
      <Form style={{flex: 1}}>
        <Item>
          <Input placeholder='Usuario'/>
        </Item>
        <Item last>
          <Input placeholder='Contraseña' value={this.state.password} onChangeText={(text)=>{this.setState({password: text})}} />
        </Item>
        <Button light full onPress={()=>{Actions.mainWorker()}}>
          <Text style={{color: 'black'}}>Continuar</Text>
        </Button>
      </Form>
    </View>
    );
  }
}
