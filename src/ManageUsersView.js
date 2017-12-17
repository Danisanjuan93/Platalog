import React, { Component } from 'react';
import { StyleSheet, View, ScrollView, AsyncStorage, AlertIOS, Platform } from 'react-native';
import { Actions } from 'react-native-router-flux';
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Drawer, Right, Left, Title, Header, Label } from 'native-base';
import SearchBar from 'react-native-searchbar';
import ActionButton from 'react-native-action-button';
import ModalDropdown from 'react-native-modal-dropdown';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
import axios from 'axios';
import { MenuContext } from 'react-native-popup-menu';
import { Menu, MenuOptions, MenuOption, MenuTrigger } from 'react-native-popup-menu';

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
      this.setState({results: e }, ()=>{console.log(EMPLOYEES)});

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
    this.setState({results: EMPLOYEES});
  }

  showLoadBackArrow(){
    if (Platform.OS == 'ios'){
      return (
        <Left>
          <Button transparent onPress={() => Actions.pop({refresh: {reload: Math.random()}})}>
            <Icon style={{color: 'white'}} name='ios-arrow-back-outline'/>
          </Button>
        </Left>
    )}else{
      return ( <Left></Left> )
    }
  }

  renderHeader= () =>{
    return(
      <Header style={{backgroundColor: '#008080'}}>
          {this.showLoadBackArrow()}
          <Title style={{alignSelf: 'center', fontWeight: 'bold', color: 'white'}}>
            {this.props.title}
          </Title>
        <SearchBar
          ref={(ref) => this.searchBar = ref}
          data={EMPLOYEES}
          handleResults={this._handleResults}
          allDataOnEmptySearch
          placeholder='Localización,trabajador...'
          style={{flex: 1}}
        />
        <Right>
        <Menu style={{height: 24}}>
          <MenuTrigger>
            <Icon style={{color: 'white'}} name='ios-apps-outline'/>
          </MenuTrigger>
          <MenuOptions style={{backgroundColor: '#59ACAC'}}>
          <MenuOption onSelect={()=> this.searchBar.show()}>
            <Text style={{color: 'white'}}><Icon style={{color: 'white'}} name='search'/>{' Buscar Usuario'}</Text>
          </MenuOption>
            <MenuOption onSelect={()=> this.showAddWorkerDialog()}>
              <Text style={{color: 'white'}}><Icon style={{color: 'white'}} name='ios-add-circle-outline'/>{' Nuevo Usuario'}</Text>
            </MenuOption>
          </MenuOptions>
        </Menu>
        </Right>
      </Header>
      )
  }

  mapWorkers(){
    return(
      <List dataArray={this.state.results} renderRow={(worker) =>
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
    titleTextStyle: styles.font,
    dialogStyle: styles.dialogStyle,
    animationDuration: 200,
    height: 420,
    dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
    children: (
      <View style={{flex: 1, backgroundColor: '#E6F2F2'}}>
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
          <Item inlinelabel>
            <Label style={{paddingTop: '1%'}}>Finca:</Label>
            <ModalDropdown textStyle={{fontSize:15}}  style={{paddingTop: '4%', marginHorizontal: 40 }} options={LOCATIONS} defaultValue='Zona...' onSelect={(idx,value)=>{asignedFinca = FINCAS[idx]}}/>
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
      <MenuContext>
        <View style={{flex: 1}}>
          {this.renderHeader()}
          {this.mapWorkers()}
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
