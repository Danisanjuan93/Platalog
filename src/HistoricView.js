import React, { Component } from 'react';
import {StyleSheet, View, AsyncStorage} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Text, List, ListItem } from 'native-base';
import axios from 'axios';

const STORAGE_KEY = 'access_token';

export default class HistoricView extends Component {

  constructor(props){
    super(props)
    this.state={
        historic: []
    }
  }

  componentWillMount(){
    this.getActivities();
  }

  async getActivities(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    axios({
      method: 'get',
      url: 'http://127.0.0.1:8000/api/activities/finished',
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      self.setState({historic: response.data})
    })
    .catch(function (error) {
    })
  }

  mapHistoric(){
    return(
      <List dataArray={this.state.historic} renderRow={(activity) =>
        <ListItem onPress={() => {}}>
          <View style={{flexDirection: 'column'}}>
            <Text style={{alignSelf:'flex-start'}}>{activity.finca.finca_name + ': ' + activity.worker.username + ' realizó la tarea ' + activity.name}</Text>
            <Text style={{fontWeight: 'bold', alignSelf:'flex-start', size: 5 }}>"activity.date"</Text>
          </View>
        </ListItem>
        }>
      </List>
    );
  }

  render() {
    return (
    <List style={{flex: 1}}>
      {this.mapHistoric()}
    </List>
    );
  }
}
