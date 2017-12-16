import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage, StatusBar, TouchableOpacity } from 'react-native';
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

const STORAGE_FINCAID = 'fincaID';
const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';

export default class FacebookTabBar extends Component {
  icons = [];
  text = [];
  constructor(props) {
    super(props);
    this.icons = [];
    this.text = [];
  }

  componentDidMount() {
    this._listener = this.props.scrollValue.addListener(this.setAnimationValue.bind(this));
  }

  setAnimationValue({ value, }) {
    this.icons.forEach((icon, i) => {
      const progress = (value - i >= 0 && value - i <= 1) ? value - i : 1;
      icon.setNativeProps({
        style: {
          color: this.iconColor(progress),
        },
      });
    });
    this.text.forEach((text, i) => {
      const progress = (value - i >= 0 && value - i <= 1) ? value - i : 1;
      text.setNativeProps({
        style: {
          color: this.iconColor(progress),
        },
      });
    });
  }

  //color between rgb(59,89,152) and rgb(204,204,204)
  iconColor(progress) {
    const red = (255 ) * progress;
    const green =  255  * progress;
    const blue =  (255 ) * progress;
    return `rgb(${red}, ${green}, ${blue})`;
  }

  render() {
    return <View style={styles.tabs}>
      {this.props.tabs.map((tab, i) => {
        return <TouchableOpacity key={tab} onPress={() => this.props.goToPage(i)} style={styles.tab}>
          <Icon
            name={tab.split('+')[0]}
            size={30}
            style={{color: 'white'}}
            ref={(icon) => { this.icons[i] = icon; }}
          />
          <Text style={{color: 'white'}} ref={(text) => {this.text[i] = text;}}>{tab.split('+')[1]}</Text>
        </TouchableOpacity>;
      })}
    </View>;
  }
}

const styles = StyleSheet.create({
  tab: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
    paddingBottom: 10,
  },
  tabs: {
    height: 60,
    flexDirection: 'row',
    paddingTop: 5,
    borderWidth: 1,
    borderTopWidth: 0,
    borderLeftWidth: 0,
    borderRightWidth: 0,
    borderBottomColor: 'rgba(0,0,0,0.05)',
    backgroundColor: '#008080'
  },
});
