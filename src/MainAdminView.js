import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS} from 'react-native';
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

export default class MainAdminView extends Component {

  constructor(props){
    super(props)
    this.state={
      fincas:[{
        name: '',
        progress: '',
        location: '',
        lastActivity: ''
      }]
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
            <Input />
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Tipo de Riego</Label>
            <Input />
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Tipo de Planta</Label>
            <Input />
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Localizacion</Label>
            <Input />
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Nombre</Label>
            <Input />
          </Item>
        </View>
        <DialogButton text='Aceptar' onPress={() => {this.getFincaRequest()}}/>
      </View>
      )
    });
  }

  getFincaRequest(){
    AlertIOS.alert(
      "Se llama correctamente"
    )
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
