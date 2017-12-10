import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage, StatusBar} from 'react-native';
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
      reload: false
    }
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

  render() {
    return (
    <Drawer
      ref={(ref) => { this.drawer = ref; }}
      content={<DrawerContent navigator={this.navigator} />}
      onClose={() => this.closeDrawer()}>
      <StatusBar hidden={true} />
      <View style={{flex: 1}}>
        <Header title={this.props.title} menu showMenu={()=>this.openDrawer()}/>
        <ScrollableTabView tabBarBackgroundColor='#2FBF6D' tabBarActiveTextColor='white' tabBarInactiveTextColor='white' tabBarUnderlineStyle={{backgroundColor: 'white'}}>
          <TracingView tabLabel='Seguimiento'/>
          <AnalysisView tabLabel='Analisis'/>
          <HistoricView tabLabel='Historial'/>
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
    color: 'black'
  }
});
