import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage} from 'react-native';
import {Actions} from 'react-native-router-flux';
import SearchBar from 'react-native-searchbar'
import { Button,Icon, Text, Form, Item, Input,List, ListItem,Header, Right, Title, Body,Left } from 'native-base';
import axios from 'axios';
import MyHeader from './Header';

const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';

export default class MainWorkerView extends Component {


  constructor(props){
    super(props)
    this.state={
      pendingActivities: [{
        name: 'Regar',
        worker: 'Yo',
        zone: 'Tafira'
      },
      {
        name: 'Recoger',
        worker: 'Yo',
        zone: 'Telde'
      }],
      results: [],
      fincas: [],
      activities: []
    }
  }
  componentWillMount(){
    this.getFincas();
    this.mapPendingActivities();
  }
  _handleResults= (e) => {
      this.setState({results: e }, ()=>{console.log(this.state.results)});
  }

  async getFincas(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    const user = JSON.parse(await AsyncStorage.getItem(STORAGE_USER));
    axios({
      method: 'get',
      url: 'http://127.0.0.1:8000/api/fincas/' + user.User.id,
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      self.setState({fincas: response.data})
    })
    .catch(function (error) {
      AlertIOS.alert(
        "Error",
        JSON.stringify(error)
      )
    })
  }

  async getActivities(finca){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    axios({
      method: 'get',
      url: 'http://127.0.0.1:8000/api/activities/' + finca.finca.id,
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      AlertIOS.alert(
        "Actividad",
        JSON.stringify(response)
      )
    })
    .catch(function (error) {
      AlertIOS.alert(
        "Error",
        JSON.stringify(error)
      )
    })
  }

  async mapPendingActivities(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    axios({
      method: 'get',
      url: 'http://127.0.0.1:8000/api/activities/1',
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      self.setState({activities: response.data})
      AlertIOS.alert(
        "Success",
        JSON.stringify(response.data)
      )
    })
    .catch(function (error) {
      AlertIOS.alert(
        "Error",
        JSON.stringify(error)
      )
    })
  }

  renderHeader= () =>{
    return(
      <Header>
          <Left/>
          <Title style={{alignSelf: 'center'}}>
            {this.props.title}
          </Title>
        <SearchBar
          ref={(ref) => this.searchBar = ref}
          data={this.state.pendingActivities}
          handleResults={this._handleResults}
          allDataOnEmptySearch
          autoCapitalize
          placeholder='Localización, actividad...'
          style={{flex: 1}}
        />
      <Right>
        <Button transparent onPress={()=> this.searchBar.show()}>
          <Icon name='search'/>
        </Button>
      </Right>
      </Header>
      )
}
  render() {

    return (
    <View style={{flex: 1}}>
      {this.renderHeader()}
    </View>
    );
  }
}
