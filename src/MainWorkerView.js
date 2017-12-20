import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage, TouchableOpacity } from 'react-native';
import {Actions} from 'react-native-router-flux';
import SearchBar from 'react-native-searchbar'
import { Button,Icon, Text, Form, Item, Input,List, ListItem,Header, Right, Title, Body, Left, Label } from 'native-base';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
import axios from 'axios';
import MyHeader from './Header';

const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';
const SAY_HELLO = 'say_hello';

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

  // componentWillReceiveProps(nextProps){
  //   this.setState({activities: [], results: []});
  //   this.getActivities();
  // }

  async componentDidUpdate(){
    if (this.state.reload){
      DialogManager.dismiss();
      this.setState({reload: false})
      this.getActivities();
    }
  }

  async componentWillMount(){
    this.getActivities();
  }

  _handleResults= (e) => {
      this.setState({results: e }, ()=>{console.log(this.state.results)});
  }

  async finishActivity(activity){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    axios({
      method: 'patch',
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/activities/' + JSON.stringify(activity.id) + '/state',
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      self.setState({reload: true, activities: [], results: []});
    })
    .catch(function (error) {
    })
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
    DialogManager.show({
    title: 'Actividad',
    titleAlign: 'center',
    titleTextStyle: styles.font,
    animationDuration: 200,
    dialogStyle: styles.dialogStyle,
    height: 170,
    dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
    children: (
      <View style={{flex: 1, backgroundColor: '#E6F2F2'}}>
        <View>
          <Item inlinelabel>
            <Label style={{fontSize: 17, padding: '2%', fontWeight: 'bold'}}>Actividad:</Label>
            <Label style={{fontSize: 17, padding: '2%', fontWeight: 'bold'}}>{activity.name}</Label>
          </Item>
          <Item inlinelabel>
            <Label style={{fontSize: 17, padding: '2%', fontWeight: 'bold'}}>Finca:</Label>
            <Label style={{fontSize: 17, padding: '2%', fontWeight: 'bold'}}>{activity.finca.finca_name}</Label>
          </Item>
        </View>
        <View style={{flex:1, flexDirection: 'row', justifyContent:'center'}}>
          <DialogButton text='Finalizar' onPress={() => this.finishActivity(activity)}/>
        </View>
      </View>
      )
    })
  }

  mapActivities(){
    return(
      <List dataArray={this.state.results} renderRow={(activity) =>
        <ListItem onPress={() => {this.onClickActivity(activity)}}>
          <View style={{flexDirection: 'column', flex:1}}>
            <Text style={{fontWeight: 'bold', alignSelf:'center', fontSize: 20, paddingLeft: '20%' }}>{activity.name}</Text>
          </View>
          <TouchableOpacity onPress={() => Actions.mapView({id: (activity.id*2)/10000})}>
            <Icon name='ios-map-outline' style={{fontWeight: 'bold', alignSelf:'center' }}/>
            <Text style={{fontWeight: 'bold', fontSize: 10}}>Ver Mapa</Text>
          </TouchableOpacity>
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

const styles = StyleSheet.create({
  dialogStyle:{
    backgroundColor: '#008080'
  },
  font:{
    color: 'white',
    fontWeight: 'bold'
  }
});
