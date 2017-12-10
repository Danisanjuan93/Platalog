import React, { Component } from 'react';
import { StyleSheet, View, ScrollView, AsyncStorage, AlertIOS, Platform } from 'react-native';
import { Actions } from 'react-native-router-flux';
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Drawer, Right, Left, Title, Header, Label } from 'native-base';
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
let FINCAS = [];

export default class ManageUsersView extends Component {

  constructor(props){
    super(props)
    this.state={
      workerList: [],
      locations: [],
      results:[],
      fincas: [],
      firstname: '',
      lastname: '',
      password: '',
      email: '',
      reload: false,
      userID: ''
    }
  }

  async componentWillMount(){
    this.setState({
      fincas: JSON.parse(await AsyncStorage.getItem(STORAGE_FINCAS_USER))
    })
    this.getWorkers();
  }

  async componentDidUpdate(){
    if (this.state.reload){
      this.setState({reload:false, workerList: [], locations: []})
      this.getWorkers();
    }
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
        url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/users/' + finca.finca.id + '/workers',
        headers :{
          'Authorization': 'Bearer ' + token,
        }
      })
      .then(function (response) {
        self.setState({workerList: self.state.workerList.concat(response.data)})
        self.setState({results: self.state.results.concat(response.data)})
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
    FINCAS = [];
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

    const mapFinca = this.state.fincas.map((finca) =>
      FINCAS = FINCAS.concat(finca.finca.id)
    )

    for (let i = 0; i < WORKERS.length; i++){
      EMPLOYEES = EMPLOYEES.concat({id: WORKERSID[i], name: WORKERS[i], location: LOCATIONS[i]})
    }
  }

  showLoadBackArrow(){
    if (Platform.OS == 'ios'){
      return (
        <Left>
          <Button transparent onPress={() => Actions.pop()}>
            <Icon name='ios-arrow-back-outline'/>
          </Button>
        </Left>
    )}else{
      return ( <Left></Left> )
    }
  }

  renderHeader= () =>{
    return(
      <Header>
          {this.showLoadBackArrow()}
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

  showAddWorkerDialog(){
    let asignedFinca;
    DialogManager.show({
    title: 'Nuevo Trabajador',
    titleAlign: 'center',
    animationDuration: 200,
    height: 420,
    dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
    children: (
      <View style={{flex: 1}}>
        <View>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Nombre</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({firstname: text})}}/>
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Apellidos</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({lastname: text})}}/>
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Email</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({email: text})}}/>
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Contraseña</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({password: text})}}/>
          </Item>
          <Item>
            <ModalDropdown textStyle={{fontSize:15}}  style={{marginVertical: 10, marginHorizontal: 17 }} options={FINCAS} defaultValue='Zona...' onSelect={(idx,value)=>{asignedFinca = value}}/>
          </Item>
        </View>
        <DialogButton text='Aceptar' onPress={() => {this.newWorker(asignedFinca)}}/>
      </View>
      )
    });
  }

  async newWorker(finca){
      var self = this;
      const token = await AsyncStorage.getItem(STORAGE_KEY);
      axios({
        method: 'post',
        url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/users/registers',
        headers :{
          'Authorization': 'Bearer ' + token,
          'Content-Type': 'application/json'
        },
        data: {
          firstName: this.state.firstname,
          lastName: this.state.lastname,
          password: this.state.password,
          email: this.state.email,
          rol: "0"
        }
      })
      .then(function (response) {
        self.setState({userID: response.data.userID})
        self.patchFinca(finca, response.data.userID);
      })
      .catch(function (error) {
        console.log(error);
      })
    }

    async patchFinca(finca, worker){
      var self = this;
      const token = await AsyncStorage.getItem(STORAGE_KEY);
      axios({
        method: 'patch',
        url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/users/' + finca + '/fincas/' + worker,
        headers :{
          'Authorization': 'Bearer ' + token,
          'Content-Type': 'application/json'
        },
      })
      .then(function (response) {
        self.setState({reload: true});
        DialogManager.dismiss();
      })
      .catch(function (error) {
        console.log(error);
      })
      }

    render() {
      return (
        <View style={{flex: 1}}>
          {this.renderHeader()}
          {this.mapWorkers()}
          <ActionButton buttonColor="blue" onPress={()=>{this.showAddWorkerDialog()}}/>
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
