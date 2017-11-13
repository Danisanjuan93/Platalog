import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input,List, ListItem, Drawer, Label } from 'native-base';
import Header from './Header';
import TracingView from './TracingView';
import AnalysisView from './AnalysisView';
import DrawerContent from './DrawerContent';
import HistoricView from './HistoricView';
import ScrollableTabView from 'react-native-scrollable-tab-view';
import ActionButton from 'react-native-action-button';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
import ModalDropdown from 'react-native-modal-dropdown';
import axios from 'axios';

const STORAGE_FINCAID = 'fincaID';
const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';

export default class MainAdminView extends Component {

  constructor(props){
    super(props)
    this.state={
      fincas:[{
        name: '',
        progress: '',
        location: '',
        lastActivity: ''
      }],
      estateType: '',
      irrigationType: '',
      plantVariety: '',
      location: '',
      fincaName: '',
    }
  }

  closeDrawer = () => {
    this.drawer._root.close()
  };

  openDrawer = () => {
    this.drawer._root.open()
  };

  showAddFincaDialog(){
    DialogManager.show({
    title: 'Nueva Finca',
    titleAlign: 'center',
    animationDuration: 200,
    height: 420,
    dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
    children: (
      <View style={{flex: 1}}>
        <View>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Tipo de Finca</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({estateType: text})}}/>
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Tipo de Riego</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({irrigationType: text})}}/>
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Tipo de Planta</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({plantVariety: text})}}/>
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Localizacion</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({location: text})}}/>
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Nombre</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({fincaName: text})}}/>
          </Item>
        </View>
        <DialogButton text='Aceptar' onPress={() => {this.postFincaRequest()}}/>
      </View>
      )
    });
  }

  async postFincaRequest(){
    var self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    const user = await AsyncStorage.getItem(STORAGE_USER);
    axios({
      method: 'post',
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/fincas',
      headers :{
        'Authorization': 'Bearer ' + token,
        'Content-Type': 'application/json'
      },
      data: {
        estateType: this.state.estateType,
        irrigationType: this.state.irrigationType,
        plantVariety: this.state.plantVariety,
        location: this.state.location,
        fincaName: this.state.fincaName
      }
    })
    .then(function (response) {
      self.storageValues('fincaID', JSON.stringify(response.data.fincaID));
      DialogManager.dismiss();
    })
    .catch(function (error) {
      console.log(error);
    })
  }

  async storageValues(item, selectedValue){
    try  {
      await AsyncStorage.setItem(item, selectedValue);
    } catch (error) {
      console.log('AsyncStorage error: ' + error.message);
    }
  }

  render() {
    return (
    <Drawer
      ref={(ref) => { this.drawer = ref; }}
      content={<DrawerContent navigator={this.navigator} />}
      onClose={() => this.closeDrawer()}>
      <View style={{flex: 1}}>
        <Header title={this.props.title} menu showMenu={()=>this.openDrawer()}/>
        <ScrollableTabView>
          <TracingView tabLabel='Seguimiento'/>
          <AnalysisView tabLabel='Analisis'/>
          <HistoricView tabLabel='Historial'/>
        </ScrollableTabView>
        <ActionButton buttonColor="blue" onPress={()=>{this.showAddFincaDialog()}}/>
      </View>
    </Drawer>
    );
  }
}
