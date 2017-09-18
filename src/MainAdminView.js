import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input,List, ListItem } from 'native-base';
import Header from './Header';
import TracingView from './TracingView';
import AnalysisView from './AnalysisView';
import HistoricView from './HistoricView';
import ScrollableTabView from 'react-native-scrollable-tab-view';
export default class MainAdminView extends Component {

  constructor(props){
    super(props)
  }
  render() {
    return (
    <View style={{flex: 1}}>
      <Header title={this.props.title}/>
      <ScrollableTabView>
        <TracingView tabLabel='Seguimiento'/>
        <AnalysisView tabLabel='Analisis'/>
        <HistoricView tabLabel='Historial'/>
      </ScrollableTabView>
    </View>
    );
  }
}
