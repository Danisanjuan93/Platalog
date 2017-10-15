import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input,List, ListItem, Drawer } from 'native-base';
import Header from './Header';
import TracingView from './TracingView';
import AnalysisView from './AnalysisView';
import DrawerContent from './DrawerContent';
import HistoricView from './HistoricView';
import ScrollableTabView from 'react-native-scrollable-tab-view';
export default class MainAdminView extends Component {

  constructor(props){
    super(props)
  }

  closeDrawer = () => {
    this.drawer._root.close()
  };

  openDrawer = () => {
    this.drawer._root.open()
  };

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
      </View>
    </Drawer>
    );
  }
}
