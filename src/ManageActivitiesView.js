import React, { Component } from 'react';
import { StyleSheet, View, ScrollView, AsyncStorage, AlertIOS } from 'react-native';
import { Actions } from 'react-native-router-flux';
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Drawer, Right, Left, Title, Header } from 'native-base';
import SearchBar from 'react-native-searchbar'
import ActionButton from 'react-native-action-button';
import ModalDropdown from 'react-native-modal-dropdown';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
import axios from 'axios';

const STORAGE_KEY = 'access_token';
const STORAGE_FINCAS_USER = 'fincas_user';
let WORKERS = [];
let FINCAS = [];
let LOCATIONS = [];

export default class ManageActivitiesView extends Component {

  constructor(props){
    super(props)
    this.state={
      activities:[],
      workers: [],
      results: [],
      fincas: [],
      activitiesOptions: ['Regar','Sembrar','Recoger','Deshijar']
    }
  }
  async componentWillMount(){
    this.setState({
      fincas: JSON.parse(await AsyncStorage.getItem(STORAGE_FINCAS_USER))
    })
    this.getWorkers();
  }

  _handleResults= (e) => {
      this.setState({results: e }, ()=>{console.log(this.state.results)});
  }

  async getWorkers(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    const listFinca = this.state.fincas.map((finca) =>
      axios({
        method: 'get',
        url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/users/' + finca.finca.id + '/workers',
        headers :{
          'Authorization': 'Bearer ' + token,
        }
      })
      .then(function (response) {
        self.setState({workers: self.state.workers.concat(response.data)})
      })
      .catch(function (error) {
        AlertIOS.alert(
          "Error",
          JSON.stringify(error)
        )
      })
    );
  }

  async asignActivity(asignedWorker, asignedActivity, asignedFinca, asignedLocation){
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
          data={this.state.activities}
          handleResults={this._handleResults}
          allDataOnEmptySearch
          autoCapitalize
          placeholder='Localización, actividad, estado...'
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

  showAddActivityDialog(){
    let asignedWorker;
    let asignedActivity;
    let asignedFinca;
    let asignedLocation;
    DialogManager.show({
      title: 'Asignar actividad',
      titleAlign: 'center',
      animationDuration: 200,
      height: 200,
      dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
      children: (
        <View style={{flex: 1}}>
          <View style={{flexDirection:'row', alignSelf:'center', marginVertical:5}}>
            <Text>Trabajador: </Text>
            <ModalDropdown textStyle={{fontSize:15}}  style={{marginHorizontal: 5}} options={WORKERS} defaultValue='Trabajador...' onSelect={(idx,value)=>{asignedWorker = value}}/>
          </View>
          <View style={{flexDirection:'row',alignSelf:'center', marginVertical: 5}}>
            <Text>Actividad: </Text>
            <ModalDropdown textStyle={{fontSize:15}} style={{marginHorizontal: 5}} options={this.state.activitiesOptions} defaultValue='Actividad...' onSelect={(idx,value)=>{asignedActivity = value}}/>
          </View>
          <View style={{flexDirection:'row',alignSelf:'center', marginVertical: 5}}>
            <Text>Finca: </Text>
            <ModalDropdown textStyle={{fontSize:15}} style={{marginHorizontal: 5}} options={FINCAS} defaultValue='Finca...' onSelect={(idx,value)=>{asignedFinca = value, asignedLocation=LOCATIONS[idx]}}/>
          </View>
          <DialogButton text='Aceptar' onPress={()=>{
              this.asignActivity(asignedWorker, asignedActivity, asignedFinca, asignedLocation)
              }}/>
        </View>
      ),
    }, () => {
    console.log('callback - show');
    });
  }

  mapActivities(){
    const mapFinca = this.state.fincas.map((finca) =>
      FINCAS = FINCAS.concat(finca.finca.id)
    )

    const mapLocation = this.state.fincas.map((finca) =>
      LOCATIONS = LOCATIONS.concat(finca.finca.location)
    )

    const mapWorker = this.state.workers.map((worker) =>
      WORKERS = WORKERS.concat(worker.users.id)
    )
    WORKERS = Array.from(new Set(WORKERS))

    return(
      <List dataArray={WORKERS} renderRow={(worker) =>
        <ListItem onPress={()=>{}}>
          <Left>
            <View style={{flexDirection: 'column', flex:1}}>
              <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{worker}</Text>
            </View>
          </Left>
        </ListItem>
        }>
      </List>
    );
  }

  render() {
    return (
      <View style={{flex: 1}}>
        {this.renderHeader()}
        {this.mapActivities()}
        <ActionButton buttonColor="blue" onPress={()=>{this.showAddActivityDialog()}}/>
      </View>
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
  }
});
