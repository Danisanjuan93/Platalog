import React, { Component } from 'react';
import {StyleSheet,View, Image} from 'react-native';
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
      <View style={{flex:1}}>
        <Image
          style={{flex:1}}
          source={{uri: 'https://facebook.github.io/react/img/logo_og.png'}}
        />
      </View>

      <Form style={{flex: 2, padding: 20}}>
        <Item>
          <Input placeholder='Usuario'/>
        </Item>
        <Item last>
          <Input placeholder='Contraseña' value={this.state.password} onChangeText={(text)=>{this.setState({password: text})}} />
        </Item>
        <Button light style={styles.loginBtn} full onPress={()=>{Actions.mainAdmin()}}>
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
