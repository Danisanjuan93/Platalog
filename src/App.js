import React, { Component } from 'react';
import {Scene, Router, Schema, Animations} from 'react-native-router-flux';
import LoginScreen from './LoginScreen';
import MainWorkerView from './MainWorkerView';
import PendingActivityDetailsScreen from './PendingActivityDetailsScreen';
import MainAdminView from './MainAdminView';
import ManageActivitiesView from './ManageActivitiesView';
import OrdersChartView from './OrdersChartView';
import ManageUsersView from './ManageUsersView';
import ManageOrdersView from './ManageOrdersView';
import PendingOrderDetailsScreen from './PendingOrderDetailsScreen';
import ActivitiesChartView from './ActivitiesChartView';
import BenefitsChartView from './BenefitsChartView';
import MapView from './MapView';

export default class App extends Component {
  render() {
    return (
      <Router hideNavBar>
              <Scene key="modal" modal>
                  <Scene key='root' hideNavBar>
                    <Scene key='login' type='replace' component={LoginScreen} title='Login' />
                    <Scene key='mainWorker' type='replace' component={MainWorkerView} title='Página Principal'  />
                    <Scene key='mainAdmin' type='replace' component={MainAdminView} title='Página Principal'  />
                    <Scene key='ordersChart' component={OrdersChartView} title='Pedidos'  />
                    <Scene key='manageActivities' component={ManageActivitiesView} title='Gestionar actividades'  />
                    <Scene key='pendingActivityDetails' component={PendingActivityDetailsScreen}/>
                    <Scene key='manageUsers' component={ManageUsersView} title='Gestionar Trabajadores' />
                    <Scene key='manageOrders' component={ManageOrdersView} title='Gestionar Pedidos' />
                    <Scene key='pendingOrderDetailsScreen' component={PendingOrderDetailsScreen}/>
                    <Scene key='activitiesChart' component={ActivitiesChartView} title='Actividades'  />
                    <Scene key='benefitsChart' component={BenefitsChartView} title='Ingresos'  />
                    <Scene key='mapView' component={MapView} title='Mapa'  />
                  </Scene>
              </Scene>
      </Router>
    );
  }
}
