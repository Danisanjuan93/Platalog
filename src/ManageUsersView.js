import React, { Component } from 'react';
import { StyleSheet, View, ScrollView, AsyncStorage, AlertIOS } from 'react-native';
import { Actions } from 'react-native-router-flux';
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Drawer, Right, Left, Title, Header } from 'native-base';
import SearchBar from 'react-native-searchbar';
import ActionButton from 'react-native-action-button';
import ModalDropdown from 'react-native-modal-dropdown';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
import axios from 'axios';

const STORAGE_KEY = 'access_token';
const STORAGE_FINCAS_USER = 'fincas_user';
let WORKERS = [];
let WORKERSID = [];
let LOCATIONS = [];
let EMPLOYEES = [];

export default class ManageUsersView extends Component {

  constructor(props){
    super(props)
    this.state={
      workerList: [],
      locations: [],
      results:[],
      fincas: []
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
    const map = self.state.fincas.map((finca) =>
      axios({
        method: 'get',
        url: 'http://127.0.0.1:8000/api/users/' + finca.finca.id + '/workers',
        headers :{
          'Authorization': 'Bearer ' + token,
        }
      })
      .then(function (response) {
        self.setState({workerList: self.state.workerList.concat(response.data)})
        self.setState({locations: self.state.locations.concat(response.data)})
        self.setData();
      })
      .catch(function (error) {
      })
    );
  }

  setData(){
    WORKERS = [];
    WORKERSID = [];
    LOCATIONS = [];
    EMPLOYEES = [];
    const mapWorker = this.state.workerList.map((worker) =>
      WORKERS = WORKERS.concat(worker.users.username)
    )
    WORKERS = Array.from(new Set(WORKERS))

    const mapWorkerID = this.state.workerList.map((worker) =>
      WORKERSID = WORKERSID.concat(worker.users.id)
    )
    WORKERSID = Array.from(new Set(WORKERSID))

    const mapLocation = this.state.locations.map((finca) =>
      LOCATIONS = LOCATIONS.concat(finca.finca.location)
    )
    LOCATIONS = Array.from(new Set(LOCATIONS))

    for (let i = 0; i < WORKERS.length; i++){
      EMPLOYEES = EMPLOYEES.concat({id: WORKERSID[i], name: WORKERS[i], location: LOCATIONS[i]})
    }
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
          data={this.state.workerList}
          handleResults={this._handleResults}
          allDataOnEmptySearch
          autoCapitalize
          placeholder='Localización,trabajador...'
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

  mapWorkers(){
    return(
      <List dataArray={EMPLOYEES} renderRow={(worker) =>
        <ListItem onPress={()=>{}}>
          <Left>
            <View style={{flexDirection: 'column', flex:1}}>
              <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{worker.name}</Text>
            </View>
          </Left>
          <Right>
            <View style={styles.pendingActivity}>
              <Text style={{color: 'white', fontSize: 10, alignSelf: 'center'}}>{worker.location}</Text>
            </View>
          </Right>
        </ListItem>
        }>
      </List>
    );
  }

  showAddActivityDialog(){
    let asignedZone;
    let asignedWorker;
    DialogManager.show({
      title: 'Asignar actividad',
      titleAlign: 'center',
      animationDuration: 200,
      height: 200,
      dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
      children: (
        <View style={{flex: 1}}>
            <Form style={{flex: 1}}>
              <Item>
                <ModalDropdown textStyle={{fontSize:15}}  style={{marginVertical: 10, marginHorizontal: 17 }} options={WORKERS} defaultValue='Trabajador...' onSelect={(idx,value)=>{asignedWorker = WORKERSID[idx]}}/>
              </Item>
              <Item>
                <ModalDropdown textStyle={{fontSize:15}}  style={{marginVertical: 10, marginHorizontal: 17 }} options={LOCATIONS} defaultValue='Zona...' onSelect={(idx,value)=>{asignedZone = value}}/>
              </Item>
            </Form>
          <DialogButton text='Aceptar' onPress={()=>{
              this.newWorker(asignedZone, asignedWorker)
              }}/>
        </View>
      ),
    }, () => {
      console.log('callback - show');
    });
  }

  newWorker(zone, worker){
    if(worker != undefined && zone != undefined){
      var self = this;
      const token = await AsyncStorage.getItem(STORAGE_KEY);
      axios({
        method: 'post',
        url: 'http://127.0.0.1:8000/api/fincas',
        headers :{
          'Authorization': 'Bearer ' + token,
          'Content-Type': 'application/json'
        },
        data: {
          firstname: this.state.estateType,
          lastname: this.state.irrigationType,
          password: this.state.plantVariety,
          email: this.state.location,
          rol: this.state.fincaName
        }
      })
      .then(function (response) {
        DialogManager.dismiss();
      })
      .catch(function (error) {
        console.log(error);
      })
    }
  }

  render() {
    return (
      <View style={{flex: 1}}>
        {this.renderHeader()}
        {this.mapWorkers()}
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
