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
      refreshing: false,
      benefits: 0
    }
  }

  // componentWillReceiveProps(nextProps){
  //   if (nextProps.navigation.state.params.reload >= 0){
  //     this.setState({reload: false, orders: [], results: []})
  //     this.setData();
  //     this.getOrders();
  //   }
  // }

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
    this.setState({refreshing: true, reload: false, order:[], results: []});
    this.getOrders().then(() => {
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

  async finishOrder(order){
    if (this.state.benefits <= 0){
      AlertIOS.alert("Debe introducir sus ingresos")
    }else{
      DialogManager.dismiss();
        const self = this;
        const token = await AsyncStorage.getItem(STORAGE_KEY);
        axios({
          method: 'patch',
          url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/orders/' + JSON.stringify(order.id) + '/states/' + self.state.benefits,
          headers :{
            'Authorization': 'Bearer ' + token,
          }
        })
        .then(function (response) {
          DialogManager.dismiss();
          self.setState({reload: true, orders: [], results: []})
        })
        .catch(function (error) {
      })
    }
  }

  async postOrders(finca){
    if (this.state.receiver != null && this.state.weight != null && finca != null){
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
    }else{
      AlertIOS.alert("Por favor, rellene todos los campos")
    }
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

  showBenefitsDialog(order){
    DialogManager.show({
      title: 'Ingresos',
      titleTextStyle: styles.font,
      titleAlign: 'center',
      animationDuration: 200,
      height: 170,
      dialogStyle: styles.dialogStyle,
      dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
      children: (
        <View style={{flex: 1, backgroundColor: '#E6F2F2'}}>
          <View>
            <Item floatingLabel>
              <Label style={{padding: '2%'}}>Ingresos</Label>
              <Input keyboardType='numeric' onChangeText={(text)=>{this.setState({benefits: text})}}/>
            </Item>
          </View>
          <DialogButton text='Aceptar' onPress={() => {this.finishOrder(order)}}/>
        </View>
        )
    });
  }

  onClickOrder(order){
    {this.renderDialogByOrderState(order)};
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
            <Input keyboardType='numeric' onChangeText={(text)=>{this.setState({weight: text})}}/>
          </Item>
          <Item style={{paddingTop: '4%'}} inlinelabel>
            <Label>Finca:</Label>
            <ModalDropdown textStyle={{fontSize:15}}  dropdownTextStyle={{fontSize: 20, backgroundColor: '#E6F2F2', color: 'black'}} style={{paddingTop: '1%', marginHorizontal: 40 }} options={NAMES} defaultValue='Clic para elegir finca' onSelect={(idx,value)=>{asignedFinca = FINCAS[idx]}}/>
          </Item>
        </View>
        <DialogButton text='Aceptar' onPress={() => {this.postOrders(asignedFinca)}}/>
      </View>
      )
    });
  }

  renderDialogByOrderState(order){
    if (order.benefits == null){
      return (
        DialogManager.show({
        title: 'Finalizar',
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
                <Label style={{fontSize: 17, padding: '2%'}}>¿Desea marcar este pedido como finalizado?</Label>
              </Item>
            </View>
            <View style={{flex:1, flexDirection: 'row', justifyContent:'center'}}>
              <DialogButton text='Aceptar' onPress={() => this.showBenefitsDialog(order)}/>
              <DialogButton text='Cancelar' onPress={() => DialogManager.dismiss()}/>
            </View>
          </View>
          )
        })
      )
    }else{
      return (
        DialogManager.show({
        title: 'Finalizado',
        titleAlign: 'center',
        titleTextStyle: styles.font,
        animationDuration: 200,
        dialogStyle: styles.dialogStyle,
        height: 200,
        dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
        children: (
          <View style={{flex: 1, backgroundColor: '#E6F2F2'}}>
            <View>
              <Item inlinelabel>
                <Label style={{fontSize: 17, padding: '2%', fontWeight: 'bold'}}>Destinatario:</Label>
                <Label style={{fontSize: 17, padding: '2%', fontWeight: 'bold'}}>{order.receiver}</Label>
              </Item>
              <Item inlinelabel>
                <Label style={{fontSize: 17, padding: '2%', fontWeight: 'bold'}}>Finca:</Label>
                <Label style={{fontSize: 17, padding: '2%', fontWeight: 'bold'}}>{order.finca.finca_name}</Label>
              </Item>
              <Item inlinelabel>
                <Label style={{fontSize: 17, padding: '2%', fontWeight: 'bold'}}>Ingresos(€):</Label>
                <Label style={{fontSize: 17, padding: '2%', fontWeight: 'bold'}}>{order.benefits}</Label>
              </Item>
            </View>
          </View>
          )
        })
      )
    }
  }

  renderOrderState(order){
    if (order.state != 'Entregado'){
      return (
        <View style={[styles.pendingOrder, styles.ovalPending]}>
          <Text style={{fontWeight: 'bold', alignSelf:'center', fontSize: 16, color: 'white'}}>{order.state}</Text>
        </View>
      )
    }else{
      return (
        <View style={[styles.pendingOrder, styles.ovalFinished]}>
          <Text style={{fontWeight: 'bold', alignSelf:'center', fontSize: 16, color: 'white'}}>{order.state}</Text>
        </View>
      )
    }
  }

  mapOrders(){
    return(
      <List dataArray={this.state.results} renderRow={(order) =>
        <ListItem onPress={() => {this.onClickOrder(order)}}>
            <View style={{flexDirection: 'column', flex:1}}>
              <Text style={{fontWeight: 'bold', alignSelf:'flex-start', fontSize: 20 }}>{'Pedido para ' + order.receiver}</Text>
              <Text style={{fontWeight: 'bold', alignSelf:'flex-start', fontSize: 20 }}>{'Cantidad: '  + order.weight + ' kg'}</Text>
            </View>
          <Right>
            {this.renderOrderState(order)}
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
  dialogStyle:{
    backgroundColor: '#008080'
  },
  font:{
    color: 'white',
    fontWeight: 'bold'
  },
  pendingOrder:{
    flex: 1,
    alignContent: 'center',
    justifyContent: 'center',
    flexDirection: 'column'
  },
  ovalFinished:{
    borderRadius: 50,
    width: '120%',
    height: '130%',
    backgroundColor: 'orange',
    overflow: 'hidden'
  },
  ovalPending:{
    borderRadius: 50,
    width: '120%',
    height: '130%',
    backgroundColor: '#73B9B9',
    overflow: 'hidden'
  }
});
