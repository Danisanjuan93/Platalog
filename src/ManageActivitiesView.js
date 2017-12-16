import React, { Component } from 'react';
import { StyleSheet, View, ScrollView, AsyncStorage, AlertIOS, RefreshControl, StatusBar } from 'react-native';
import { Actions } from 'react-native-router-flux';
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Drawer, Right, Left, Title, Header, Label } from 'native-base';
import SearchBar from 'react-native-searchbar'
import ActionButton from 'react-native-action-button';
import ModalDropdown from 'react-native-modal-dropdown';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
import axios from 'axios';
import { MenuContext } from 'react-native-popup-menu';
import { Menu, MenuOptions, MenuOption, MenuTrigger } from 'react-native-popup-menu';

const STORAGE_KEY = 'access_token';
const STORAGE_FINCAS_USER = 'fincas_user';
const STORAGE_USER = 'user_data';
let WORKERS = [];
let WORKERSID = [];
let FINCAS = [];
let LOCATIONS = [];
let NAMES = [];

export default class ManageActivitiesView extends Component {



  constructor(props){
    super(props)
    this.state={
      reload: false,
      activities:[],
      workers: [],
      results: [],
      fincas: [],
      activitiesOptions: ['Regar','Sembrar','Recoger','Deshijar'],
      refreshing: false,
      user: [],
      disabled: false
    }
  }

  async componentWillMount(){
    this.setState({
      fincas: JSON.parse(await AsyncStorage.getItem(STORAGE_FINCAS_USER)),
      user: JSON.parse(await AsyncStorage.getItem(STORAGE_USER))
    })
    this.getActivities();
  }

  async componentDidUpdate(){
    if (this.state.reload){
      WORKERS = [];
      WORKERSID = [];
      this.setState({reload:false, activities: [], results: []})
      this.getActivities();
    }
  }

  _onRefresh() {
    this.setState({refreshing: true, activities: [], results: []});
    this.getActivities().then(() => {
      this.setState({refreshing: false});
    });
  }

  _handleResults= (e) => {
      this.setState({results: e }, ()=>{console.log(this.state.results)});
  }

  async getWorkers(finca, location, activity){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    axios({
      method: 'get',
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/users/' + finca + '/workers',
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      self.setState({workers: response.data})
      self.showChooseWorkerDialog(finca, location, activity);
    })
    .catch(function (error) {
      AlertIOS.alert("Error", JSON.stringify(error))
    })
  }

  async asignActivity(asignedWorker, asignedActivity, asignedFinca, asignedLocation){
    AlertIOS.alert("Titulo", JSON.stringify(this.state.disabled) + JSON.stringify(asignedWorker) + JSON.stringify(asignedActivity) + JSON.stringify(asignedLocation))
    if (!this.state.disabled){
      const self = this;
      const token = await AsyncStorage.getItem(STORAGE_KEY);
      axios({
        method: 'post',
        url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/activities',
        headers :{
          'Authorization': 'Bearer ' + token,
        },
        data: {
          name: asignedActivity,
          location: asignedLocation,
          worker: asignedWorker,
          finca: asignedFinca,
        }
      })
      .then(function (response) {
        self.setState({reload: true});
        DialogManager.dismiss();
      })
      .catch(function (error) {
        AlertIOS.alert("Error",
          JSON.stringify(error)
        )
      })
    }
  }

  async getActivities(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    const listFinca = this.state.fincas.map((finca) =>
      axios({
        method: 'get',
        url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/activities/' + finca.finca.id,
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
    );
  }

  renderHeader= () =>{
    return(
      <Header style={{backgroundColor: '#008080'}}>
        <Left>
          <Button transparent onPress={() => Actions.pop({refresh: {reload: Math.random()}})}>
            <Icon style={{color: 'white'}} name='ios-arrow-back-outline'/>
          </Button>
        </Left>
          <Title style={{alignSelf: 'center', color: 'white'}}>
            {this.props.title}
          </Title>
          <SearchBar
            ref={(ref) => this.searchBar = ref}
            data={this.state.activities}
            handleResults={this._handleResults}
            allDataOnEmptySearch
            placeholder='Localización, actividad, estado...'
            style={{flex: 1}}
          />
        <Right>
        <Menu style={{height: 24}}>
          <MenuTrigger>
            <Icon style={{color: 'white'}} name='ios-apps-outline'/>
          </MenuTrigger>
          <MenuOptions style={{backgroundColor: '#59ACAC'}}>
          <MenuOption>
            <Text style={{color: 'white'}}><Icon style={{color: 'white'}} name='search'/>{' Buscar Actividad'}</Text>
          </MenuOption>
            <MenuOption>
              <Text style={{color: 'white'}}><Icon style={{color: 'white'}} name='ios-add-circle-outline'/>{' Nueva Actividad'}</Text>
            </MenuOption>
          </MenuOptions>
        </Menu>
        </Right>
      </Header>
      )
    }

  showAddActivityDialog(){
    let asignedActivity;
    let asignedFinca;
    let asignedLocation;
    DialogManager.show({
      title: 'Asignar actividad',
      titleAlign: 'center',
      titleTextStyle: styles.font,
      animationDuration: 200,
      dialogStyle: styles.dialogStyle,
      height: 200,
      dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
      children: (
        <View style={{flex: 1, backgroundColor: '#E6F2F2'}}>
          <Item style={{paddingTop: '4%'}} inlinelabel>
            <Label>Actividad:</Label>
            <ModalDropdown textStyle={{fontSize:15}}  style={{paddingTop: '1%', marginHorizontal: 40 }} options={this.state.activitiesOptions} defaultValue='Clic para elegir actividad' onSelect={(idx,value)=>{asignedActivity = value}}/>
          </Item>
          <Item style={{paddingTop: '4%'}} inlinelabel>
            <Label>Finca:</Label>
            <ModalDropdown textStyle={{fontSize:15}}  style={{paddingTop: '1%', marginHorizontal: 40 }} options={NAMES} defaultValue='Clic para elegir finca' onSelect={(idx,value)=>{asignedFinca = FINCAS[idx], asignedLocation = LOCATIONS[idx]}}/>
          </Item>
          <DialogButton text='Aceptar' onPress={()=>{
              this.getWorkers(asignedFinca, asignedLocation, asignedActivity); DialogManager.dismiss()
              }}/>
        </View>
      ),
    }, () => {
    console.log('callback - show');
    });
  }

  setWorkers(worker){
    if (this.state.user.User.email != worker.users.email){
      WORKERS = WORKERS.concat(worker.users.username)
      WORKERSID = WORKERSID.concat(worker.users.id)
    }
  }

  setModalDropDown(asignedFinca, asignedLocation, asignedActivity){
    let asignedWorker;
    if (this.state.disabled){
      return (
        <View style={{flex: 1, backgroundColor: '#E6F2F2'}}>
          <Item style={{paddingTop: '4%'}} inlinelabel>
            <Label>Trabajador:</Label>
            <ModalDropdown disabled={this.state.disabled} textStyle={{fontSize:15}} style={{paddingTop: '1%', marginHorizontal: 40 }} options={WORKERS} defaultValue="No hay trabajadores" onSelect={(idx,value)=>{asignedWorker = WORKERSID[idx]}}/>
          </Item>
          <DialogButton text='Cancelar' onPress={()=>{DialogManager.dismiss()}}/>
        </View>
      )
    }else{
      return (
        <View style={{flex: 1, backgroundColor: '#E6F2F2'}}>
          <Item style={{paddingTop: '4%'}} inlinelabel>
            <Label>Trabajador:</Label>
            <ModalDropdown disabled={this.state.disabled} textStyle={{fontSize:15}} style={{paddingTop: '1%', marginHorizontal: 40 }} options={WORKERS} onSelect={(idx,value)=>{asignedWorker = WORKERSID[idx]}}/>
          </Item>
          <DialogButton text='Aceptar' onPress={()=>{this.asignActivity(asignedWorker, asignedActivity, asignedFinca, asignedLocation)}}/>
        </View>
      )
    }
  }

  showChooseWorkerDialog(asignedFinca, asignedLocation, asignedActivity){
    WORKERS = [];
    WORKERSID = [];
    const mapWorker = this.state.workers.map((worker) =>
      {this.setWorkers(worker)}
    )

    if (WORKERS.length <= 0){
      this.setState({disabled: true})
    }

    DialogManager.show({
      title: 'Asignar actividad',
      titleAlign: 'center',
      titleTextStyle: styles.font,
      animationDuration: 200,
      dialogStyle: styles.dialogStyle,
      height: 150,
      dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
      children: (
        this.setModalDropDown(asignedFinca, asignedLocation, asignedActivity)
      ),
    }, () => {
    console.log('callback - show');
    });
  }

  renderActivityState(activity){
    if (activity.state != 'Finalizada'){
      return (
        <Text style={{fontWeight: 'bold', alignSelf:'flex-start', fontSize: 12, backgroundColor: 'rgba(0, 122, 255, 1)', color: 'white' }}>{activity.state}</Text>
      )
    }else{
      return (
        <Text style={{fontWeight: 'bold', alignSelf:'flex-start', fontSize: 12, backgroundColor: 'rgba(255, 148, 2, 1)', color: 'white' }}>{activity.state}</Text>
      )
    }
  }

  mapActivities(){
    FINCAS = [];
    LOCATIONS = [];
    NAMES = [];
    const mapFinca = this.state.fincas.map((finca) =>
      FINCAS = FINCAS.concat(finca.finca.id)
    )
    FINCAS = Array.from(new Set(FINCAS))

    const mapLocation = this.state.fincas.map((finca) =>
      LOCATIONS = LOCATIONS.concat(finca.finca.location)
    )

    const mapNames = this.state.fincas.map((finca) =>
      NAMES = NAMES.concat(finca.finca.finca_name)
    )

    return(
      <List dataArray={this.state.results} renderRow={(activity) =>
        <ListItem disabled={true}>
          <Left>
            <View style={{flexDirection: 'column', flex:1}}>
              <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{activity.worker.username + ' tiene que ' + activity.name}</Text>
              <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>Localización: {activity.location}</Text>
            </View>
          </Left>
          <Right>
            <View style={{flexDirection: 'column', flex:1}}>
              {this.renderActivityState(activity)}
            </View>
          </Right>
        </ListItem>
        }
        refreshControl={
            <RefreshControl
              refreshing={this.state.refreshing}
              onRefresh={this._onRefresh.bind(this)}/>}
        >
      </List>
    );
  }

  render() {
    return (
      <MenuContext>
        <View style={{flex: 1}}>
          {this.renderHeader()}
          {this.mapActivities()}
        </View>
      </MenuContext>
    );
  }
}

const styles = StyleSheet.create({
  finishedActivity: {
    backgroundColor: 'green',
    flex: 1,
    height: '100%',
    width: '100%',
    alignContent: 'center',
    justifyContent: 'center'
  },
  pendingActivity:{
    backgroundColor: 'orange',
    flex: 1,
    height: '100%',
    width: '100%',
    alignContent: 'center',
    justifyContent: 'center'
  },
  dialogStyle:{
    backgroundColor: '#008080'
  },
  font:{
    color: 'white',
    fontWeight: 'bold'
  }
});
