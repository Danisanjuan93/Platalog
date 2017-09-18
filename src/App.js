import React, { Component } from 'react';
import {Scene, Router, Schema, Animations} from 'react-native-router-flux';
import LoginScreen from './LoginScreen';
import MainWorkerView from './MainWorkerView';
import PendingActivityDetailsScreen from './PendingActivityDetailsScreen';
import MainAdminView from './MainAdminView';
export default class App extends Component {
  render() {

    return (
      <Router hideNavBar>
              <Scene key="modal" modal>
                  <Scene key='root' hideNavBar>
                    <Scene key='login' component={LoginScreen} title='Login'  initial = 'true'/>
                    <Scene key='mainWorker' component={MainWorkerView} title='Pendiente'  />
                    <Scene key='mainAdmin' component={MainAdminView} title='Admin'  />
                    <Scene key='pendingActivityDetails' component={PendingActivityDetailsScreen}  />
                  </Scene>
              </Scene>
      </Router>
    );
  }
}
