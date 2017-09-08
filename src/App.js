import React, { Component } from 'react';
import {Scene, Router, Schema, Animations} from 'react-native-router-flux';
import LoginScreen from './LoginScreen';
import MainWorkerView from './MainWorkerView';
import PendingActivityDetailsScreen from './PendingActivityDetailsScreen';
export default class App extends Component {
  render() {

    return (
      <Router hideNavBar>
              <Scene key="modal" modal>
                  <Scene key='root'>
                    <Scene key='login' component={LoginScreen} title='Login' hideNavBar initial = 'true'/>
                    <Scene key='mainWorker' component={MainWorkerView} title='Pendiente' hideNavBar />
                    <Scene key='pendingActivityDetails' component={PendingActivityDetailsScreen} hideNavBar />
                  </Scene>
              </Scene>
      </Router>
    );
  }
}
