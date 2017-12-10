import React, { Component } from 'react';
import {StyleSheet, View, AsyncStorage, AlertIOS } from 'react-native';
import { Actions } from 'react-native-router-flux';
import { Button, Text } from 'native-base';
import { Bar } from 'react-native-pathjs-charts';
import Header from './Header';
import axios from 'axios';

const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';

export default class ActivitiesChartView extends Component {

  constructor(props){
    super(props)
    this.state={
      Data: [],
      graphic: [],
      options: {
        width: 300,
        height: 300,
        margin: {
          top: 20,
          left: 25,
          bottom: 50,
          right: 20
        },
        color: '#2980B9',
        gutter: 20,
        animate: {
          type: 'oneByOne',
          duration: 200,
          fillTransition: 3
        },
        axisX: {
          showAxis: true,
          showLines: true,
          showLabels: true,
          showTicks: true,
          zeroAxis: false,
          orient: 'bottom',
          label: {
            fontFamily: 'Arial',
            fontSize: 8,
            fontWeight: true,
            fill: '#34495E'
          }
        },
        axisY: {
          showAxis: true,
          showLines: true,
          showLabels: true,
          showTicks: true,
          zeroAxis: false,
          orient: 'left',
          label: {
            fontFamily: 'Arial',
            fontSize: 8,
            fontWeight: true,
            fill: '#34495E'
          }
        }
      },
      activities: []
    }
  }

  async componentWillMount(){
    this.getActivities();
  }

  async getActivities(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    axios({
      method: 'get',
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/activities/finished',
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      self.setState({activities: [response.data]});
      self.countActivities();
    })
    .catch(function (error) {
      AlertIOS.alert("No hay datos que mostrar")
    })
  }

  countActivities(){
    let pos;
    let count = 0;
    let key;
    for (let i = 0; i < this.state.activities[0].length; i++){
      key = this.state.activities[0][i];
      for (let j = i; j < this.state.activities[0].length; j++){
        if (key.deleted_at.split('-')[1] == this.state.activities[0][j].deleted_at.split('-')[1]){
          count = count + 1;
          pos = j;
        }
      }
      this.setState({Data: this.state.Data.concat({v: count, name: this.state.activities[0][i].deleted_at.split('-')[0] + '-' + this.state.activities[0][i].deleted_at.split('-')[1]})});
      count = 0;
      i = pos;
    }
    this.setState({graphic: [this.state.Data]});
  }

  render() {
    return (
    <View style={{flex: 1}}>
      <Header backArrow title={this.props.title}/>
      <Bar data={this.state.graphic} options={this.state.options} accessorKey='v'/>
    </View>
    );
  }
}
const styles = StyleSheet.create({

});
