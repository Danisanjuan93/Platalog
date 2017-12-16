import React, { Component } from 'react';
import { StyleSheet, View, AlertIOS, AsyncStorage, Platform, RefreshControl } from 'react-native';
import { Actions } from 'react-native-router-flux';
import SearchBar from 'react-native-searchbar'
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Header, Right, Title, Body, Left, Label } from 'native-base';
import axios from 'axios';
import MyHeader from './Header';
import ActionButton from 'react-native-action-button';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
import ModalDropdown from 'react-native-modal-dropdown';
import { MenuContext } from 'react-native-popup-menu';
import { Menu, MenuOptions, MenuOption, MenuTrigger } from 'react-native-popup-menu';

const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';
const STORAGE_FINCAS_USER = 'fincas_user';
let FINCAS = [];
let NAMES = [];
export default class ManageOrdersView extends Component {


  constructor(props){
    super(props)
    this.state={
      results: [],
      orders: [],
      reload: false,
      refreshing: false
    }
  }

  componentWillReceiveProps(nextProps){
    this.setState({reload: false, orders: [], results: []})
    this.setData();
    this.getOrders();
  }

  async componentWillMount(){
    this.setState({ fincas: JSON.parse(await AsyncStorage.getItem(STORAGE_FINCAS_USER)) })
    this.setData();
    this.getOrders();
  }

  async componentDidUpdate(){
    if (this.state.reload){
      this.setData();
      this.setState({reload: false, orders: [], results: []})
      this.getOrders();
    }
  }

  _onRefresh() {
    this.setState({refreshing: true});
    this.getActivities().then(() => {
      this.setState({refreshing: false});
    });
  }

  _handleResults= (e) => {
      this.setState({results: e }, ()=>{console.log(this.state.results)});
  }

  async getOrders(){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    const map = self.state.fincas.map((finca) =>
      axios({
        method: 'get',
        url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/orders/' + finca.finca.id,
        headers :{
          'Authorization': 'Bearer ' + token,
        }
      })
      .then(function (response) {
        self.setState({orders: self.state.orders.concat(response.data)})
        self.setState({results: self.state.results.concat(response.data)})
      })
      .catch(function (error) {

      })
    );
  }

  async postOrders(finca){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    axios({
      method: 'post',
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/orders',
      headers :{
        'Authorization': 'Bearer ' + token,
      },
      data: {
        weight: this.state.weight,
        receiver: this.state.receiver,
        finca: finca
      },
    })
    .then(function (response) {
      self.setState({reload: !self.state.reload})
      DialogManager.dismiss();
    })
    .catch(function (error) {

    })
  }

  setData(){
    FINCAS = [];
    const mapFinca = this.state.fincas.map((finca) =>
      FINCAS = FINCAS.concat(finca.finca.id)
    )
    NAMES = [];
    const mapNames = this.state.fincas.map((finca) =>
      NAMES = NAMES.concat(finca.finca.finca_name)
    )
  }

  onClickOrder(order){
    Actions.pendingOrderDetailsScreen({order: order})
  }

  showAddOrderDialog(){
    let asignedFinca;
    DialogManager.show({
    title: 'Nuevo Pedido',
    titleAlign: 'center',
    titleTextStyle: styles.font,
    animationDuration: 200,
    dialogStyle: styles.dialogStyle,
    height: 280,
    dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
    children: (
      <View style={{flex: 1, backgroundColor: '#E6F2F2'}}>
        <View>
          <Item inlinelabel>
            <Label>Ordenante</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({receiver: text})}}/>
          </Item>
          <Item inlinelabel>
            <Label>Kg</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({weight: text})}}/>
          </Item>
          <Item style={{paddingTop: '4%'}} inlinelabel>
            <Label>Finca:</Label>
            <ModalDropdown textStyle={{fontSize:15}}  style={{paddingTop: '1%', marginHorizontal: 40 }} options={NAMES} defaultValue='Clic para elegir finca' onSelect={(idx,value)=>{asignedFinca = FINCAS[idx]}}/>
          </Item>
        </View>
        <DialogButton text='Aceptar' onPress={() => {this.postOrders(asignedFinca)}}/>
      </View>
      )
    });
  }

  renderOrderState(order){
    if (order.state != 'Entregado'){
      return (
        <Text style={{fontWeight: 'bold', alignSelf:'flex-start', fontSize: 12, backgroundColor: 'rgba(0, 122, 255, 1)', color: 'white' }}>{order.state}</Text>
      )
    }else{
      return (
        <Text style={{fontWeight: 'bold', alignSelf:'flex-start', fontSize: 12, backgroundColor: 'rgba(255, 148, 2, 1)', color: 'white' }}>{order.state}</Text>
      )
    }
  }

  mapOrders(){
    return(
      <List dataArray={this.state.results} renderRow={(order) =>
        <ListItem onPress={() => {this.onClickOrder(order)}}>
            <View style={{flexDirection: 'column', flex:1}}>
              <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{'Pedido para ' + order.receiver + ' de '  + order.weight + ' kg'}</Text>
            </View>
          <Right>
            <View style={{flexDirection: 'column', flex:1}}>
              {this.renderOrderState(order)}
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
          data={this.state.orders}
          handleResults={this._handleResults}
          allDataOnEmptySearch
          placeholder='Localización, actividad...'
          style={{flex: 1}}
        />
        <Right>
        <Menu style={{height: 24}}>
          <MenuTrigger>
            <Icon style={{color: 'white'}} name='ios-apps-outline'/>
          </MenuTrigger>
          <MenuOptions style={{backgroundColor: '#59ACAC'}}>
            <MenuOption onSelect={()=> this.searchBar.show()}>
              <Text style={{color: 'white'}}><Icon style={{color: 'white'}} name='search'/>{' Buscar Pedido'}</Text>
            </MenuOption>
            <MenuOption onSelect={()=> this.showAddOrderDialog()}>
              <Text style={{color: 'white'}}><Icon style={{color: 'white'}} name='ios-add-circle-outline'/>{' Nuevo Pedido'}</Text>
            </MenuOption>
          </MenuOptions>
        </Menu>
        </Right>
      </Header>
    )
  }

  render() {
    return (
      <MenuContext>
        <View style={{flex: 1}}>
          {this.renderHeader()}
          {this.mapOrders()}
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
