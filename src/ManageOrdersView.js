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
let NAMES = [];
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
    titleStyle: styles.dialogStyle,
    height: 250,
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
          <Item style={{paddingTop: '5%'}} inlinelabel>
            <Label>Finca:</Label>
            <ModalDropdown textStyle={{fontSize:15}}  style={{paddingTop: '1%', marginHorizontal: 40 }} options={NAMES} defaultValue='Clic to choose finca' onSelect={(idx,value)=>{asignedFinca = FINCAS[idx]}}/>
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
            <Icon style={{color: 'black'}} name='ios-arrow-back-outline'/>
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
          <Title style={{alignSelf: 'center', fontWeight: 'bold'}}>
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
          <Icon style={{color: 'black'}} name='search'/>
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
    color: 'black'
  }
});
