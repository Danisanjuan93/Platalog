import React, { Component } from 'react';
import { StyleSheet, View, AlertIOS, AsyncStorage, Platform } from 'react-native';
import { Actions } from 'react-native-router-flux';
import SearchBar from 'react-native-searchbar'
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Header, Right, Title, Body, Left, Label } from 'native-base';
import axios from 'axios';
import MyHeader from './Header';
import ActionButton from 'react-native-action-button';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
import ModalDropdown from 'react-native-modal-dropdown';

const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';
const STORAGE_FINCAS_USER = 'fincas_user';
let FINCAS = [];

export default class ManageOrdersView extends Component {


  constructor(props){
    super(props)
    this.state={
      results: [],
      orders: [],
      reload: false
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
  }

  onClickOrder(order){
    Actions.pendingOrderDetailsScreen({order: order})
  }

  showAddOrderDialog(){
    let asignedFinca;
    DialogManager.show({
    title: 'Nuevo Pedido',
    titleAlign: 'center',
    animationDuration: 200,
    height: 420,
    dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
    children: (
      <View style={{flex: 1}}>
        <View>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Ordenante</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({receiver: text})}}/>
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Kg</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({weight: text})}}/>
          </Item>
          <Item>
            <ModalDropdown textStyle={{fontSize:15}}  style={{marginVertical: 10, marginHorizontal: 17 }} options={FINCAS} defaultValue='Finca...' onSelect={(idx,value)=>{asignedFinca = value}}/>
          </Item>
        </View>
        <DialogButton text='Aceptar' onPress={() => {this.postOrders(asignedFinca)}}/>
      </View>
      )
    });
  }

  mapOrders(){
    return(
      <List dataArray={this.state.results} renderRow={(order) =>
        <ListItem onPress={() => {this.onClickOrder(order)}}>
          <Left>
            <View style={{flexDirection: 'column', flex:1}}>
              <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{order.receiver}</Text>
              <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{order.weight}</Text>
            </View>
          </Left>
          <Right>
            <View style={{flexDirection: 'column', flex:1}}>
              <Text style={{fontWeight: 'bold', alignSelf:'flex-start', fontSize: 10 }}>{order.state}</Text>
            </View>
          </Right>
        </ListItem>
        }>
      </List>
    );
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
          <Title style={{alignSelf: 'center'}}>
            {this.props.title}
          </Title>
        <SearchBar
          ref={(ref) => this.searchBar = ref}
          data={this.state.orders}
          handleResults={this._handleResults}
          allDataOnEmptySearch
          autoCapitalize = 'none'
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
      {this.mapOrders()}
      <ActionButton buttonColor="blue" onPress={()=>{this.showAddOrderDialog()}}/>
    </View>
    );
  }
}
