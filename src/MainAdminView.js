import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage, StatusBar } from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Drawer, Label, Footer, FooterTab } from 'native-base';
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
import CustomTab from './CustomTab';

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
      close: false
    }
  }

  async componentDidUpdate(){
    if (this.state.close){
      DialogManager.dismiss();
      this.setState({close:false})
    }
  }

  componentWillReceiveProps(nextProps){
    this.closeDrawer();
  }

  closeDrawer = () => {
    this.drawer._root.close()
  };

  openDrawer = () => {
    this.drawer._root.open()
  };

  async storageValues(item, selectedValue){
    try  {
      await AsyncStorage.setItem(item, selectedValue);
    } catch (error) {
      console.log('AsyncStorage error: ' + error.message);
    }
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
      self.setState({close: true});
    })
    .catch(function (error) {
      console.log(error);
    })
  }

  showAddFincaDialog(){
    DialogManager.show({
    title: 'Nueva Finca',
    titleTextStyle: styles.colorTitle,
    titleAlign: 'center',
    animationDuration: 200,
    height: 420,
    dialogStyle: styles.colorToModal,
    dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
    children: (
      <View style={{flex: 1, backgroundColor: '#E6F2F2'}}>
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

  render() {
    return (
    <Drawer
      ref={(ref) => { this.drawer = ref; }}
      content={<DrawerContent navigator={this.navigator} />}
      onClose={() => this.closeDrawer()}>
      <StatusBar hidden={true} />
      <View style={{flex: 1}}>
        <Header title={this.props.title} menu add showDialog={() => this.showAddFincaDialog()} showMenu={()=>this.openDrawer()}/>
        <ScrollableTabView tabBarBackgroundColor='#59ACAC' tabBarInactiveTextColor='white' tabBarPosition='bottom' renderTabBar={() => <CustomTab/>}>
          <TracingView tabLabel='ios-home-outline+Seguimiento'/>
          <AnalysisView tabLabel='ios-stats-outline+Análisis'/>
          <HistoricView tabLabel='ios-book-outline+Historial'/>
        </ScrollableTabView>
      </View>
    </Drawer>
    );
  }
}

const styles = StyleSheet.create({
  loginBtn:{
    marginHorizontal: 5,
    marginVertical: 10
  },
  colorToModal:{
    backgroundColor: '#008080',
  },
  colorTitle:{
    color: 'white'
  }
});
