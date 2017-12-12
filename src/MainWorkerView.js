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
      results: [],
      fincas: [],
      activities: [],
      reload: false
    }
  }

  componentWillReceiveProps(nextProps){
    this.setState({activities: [], results: []});
    this.getActivities();
  }

  async componentWillMount(){
    this.getActivities();
  }

  _handleResults= (e) => {
      this.setState({results: e }, ()=>{console.log(this.state.results)});
  }

  async getActivities(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    const worker = JSON.parse(await AsyncStorage.getItem(STORAGE_USER))
    axios({
      method: 'get',
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/activities/' + worker.User.id + '/activity',
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      self.setState({activities: self.state.activities.concat(response.data)})
      self.setState({results: self.state.results.concat(response.data)})
    })
    .catch(function (error) {
    })
  }

  onClickActivity(activity){
    Actions.pendingActivityDetails({activity: activity})
  }

  mapActivities(){
    return(
      <List dataArray={this.state.results} renderRow={(activity) =>
        <ListItem onPress={() => {this.onClickActivity(activity)}}>
          <View style={{flexDirection: 'column', flex:1}}>
            <Text style={{fontWeight: 'bold', alignSelf:'center', fontSize: 20, paddingLeft: '20%' }}>{activity.name}</Text>
          </View>
          <Right>
            <Icon style={{color: 'black', fontSize: 30}} name='ios-arrow-forward-outline'/>
          </Right>
        </ListItem>
        }>
      </List>
    );
  }

  renderHeader= () =>{
    return(
      <Header style={{backgroundColor: '#008080'}}>
        <Left>
          <Icon onPress={() => { Actions.login() }} style={{color: 'white'}} name='ios-log-out'/>
        </Left>
          <Title style={{alignSelf: 'center', color: 'white'}}>
            {this.props.title}
          </Title>
        <SearchBar
          ref={(ref) => this.searchBar = ref}
          data={this.state.activities}
          handleResults={this._handleResults}
          allDataOnEmptySearch
          autoCapitalize = 'none'
          placeholder='Localización, actividad...'
          style={{flex: 1}}
        />
      <Right>
        <Button transparent onPress={()=> this.searchBar.show()}>
          <Icon style={{color: 'white'}}name='search'/>
        </Button>
      </Right>
      </Header>
    )
  }

  render() {
    return (
    <View style={{flex: 1}}>
      {this.renderHeader()}
      {this.mapActivities()}
    </View>
    );
  }
}
