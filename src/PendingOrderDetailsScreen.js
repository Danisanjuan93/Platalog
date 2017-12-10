import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button, Icon, Text, Form, Item, Input, Label } from 'native-base';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
import Header from './Header';
import axios from 'axios';

const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';

export default class pendingOrderDetailsScreen extends Component {

  constructor(props){
    super(props)
    this.state={
      benefits: 0
    }
  }

  async finishOrder(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    axios({
      method: 'patch',
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/orders/' + JSON.stringify(this.props.order.id) + '/states/' + self.state.benefits,
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      DialogManager.dismiss()
      Actions.pop({refresh: {reload: Math.random()}})
    })
    .catch(function (error) {
    })
  }

  showDialog(){
    DialogManager.show({
      title: 'Ingresos',
      titleAlign: 'center',
      animationDuration: 200,
      height: 420,
      dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
      children: (
        <View style={{flex: 1}}>
          <View>
            <Item floatingLabel>
              <Label style={{padding: '2%'}}>Ingresos</Label>
              <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({benefits: text})}}/>
            </Item>
          </View>
          <DialogButton text='Aceptar' onPress={() => {this.finishOrder()}}/>
        </View>
        )
    });
  }

  renderBenefits(){
    if (this.props.order.benefits != null){
      return (
        <View>
          <Text style={{marginHorizontal: 10}}>Ingresos: {this.props.order.benefits}</Text>
          <View style={{flexDirection: 'row', marginVertical: 10}}>
            <Button disabled style={{flex:1, marginHorizontal: 7, justifyContent: 'center'}}>
              <Text>Finalizado</Text>
            </Button>
          </View>
        </View>
      )
    }else{
      return (
        <View style={{flexDirection: 'row', marginVertical: 10}}>
          <Button onPress={()=> this.showDialog()} success style={{flex:1, marginHorizontal: 7, justifyContent: 'center'}}>
            <Text>Finalizar</Text>
          </Button>
        </View>
      )
    }
  }

  render() {
    return (
      <View style={{flex: 1, justifyContent: 'center', alignContent: 'center'}}>
        <Header backArrow title="Pedido"/>
          <View style={{flex: 1, marginVertical: 20}}>
            <Text style={{marginHorizontal: 10}}>Ordenante: {this.props.order.receiver}</Text>
            <Text style={{marginHorizontal: 10}}>Finca: {this.props.order.finca.finca_name}</Text>
            {this.renderBenefits()}
          </View>
      </View>
    );
  }
}
