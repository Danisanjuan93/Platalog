import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage, Dimensions } from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Right, Left, Label, Platform } from 'native-base';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
import ActionButton from 'react-native-action-button';
import DatePicker from 'react-native-datepicker';
import * as Progress from 'react-native-progress';
import MapView from 'react-native-maps';
import { PROVIDER_GOOGLE, PROVIDER_DEFAULT } from 'react-native-maps';
import axios from 'axios';

const STORAGE_FINCAS_USER = 'fincas_user';
const { width, height } = Dimensions.get('window');
const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';
const ASPECT_RATIO = width / height;
const LATITUDE = 27.958611111111;
const LONGITUDE = -15.5925;
const LATITUDE_DELTA = 0.0922;
const LONGITUDE_DELTA = LATITUDE_DELTA * ASPECT_RATIO;
const SPACE = 0.01;
export default class TracingView extends Component {

  constructor(props) {
    super(props)
    this.state = {
      fincas: [],
      region: {
        latitude: 27.958611111111,
        longitude: -15.5925,
        latitudeDelta: 0.0922,
        longitudeDelta: 0.0421,
      },
      markerLatitude: LATITUDE + SPACE,
      markerLongitude: LONGITUDE + SPACE,
      marker1: true,
      markers: [{ latitude: LATITUDE, longitude: LONGITUDE, key: 1 }]
      ids: [],
      date: new Date(),
      reload: false
    }
  }

  async componentDidUpdate(){
    if (this.state.reload){
      this.setState({reload:false})
      this.getFincas();
    }
  }

  componentWillMount() {
    //this.getFincas();
    this.setState({
      fincas: [
        {
          finca: {
            finca_name: 'prueba',
            id: '1'
          }
        }
      ]
    });
  }

  async getFincas() {
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    const user = JSON.parse(await AsyncStorage.getItem(STORAGE_USER));
    axios({
      method: 'get',
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/fincas/' + user.User.id,
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
      .then(function (response) {
        self.setState({ fincas: response.data })
      })
      .catch(function (error) {
        AlertIOS.alert(
          "Error",
          JSON.stringify(error)
        )
      })
  }
  onMapPress(e) {
    var newMarker = [{
      latitude: e.nativeEvent.coordinate.latitude,
      longitude: e.nativeEvent.coordinate.longitude,
      key: Date.now()
    }];
    this.setState({ markers: newMarker });
  }

  async onDateChange(date, fincaID){
    const self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    const user = JSON.parse(await AsyncStorage.getItem(STORAGE_USER));
    axios({
      method: 'patch',
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/fincas/' + fincaID + '/limitdates/' + date,
      headers :{
        'Authorization': 'Bearer ' + token,
      }
    })
    .then(function (response) {
      self.getFincas();
      DialogManager.dismiss();
    })
    .catch(function (error) {
    })
  }

  showAddFincaDialog(){
    DialogManager.show({
    title: 'Nueva Finca',
    titleTextStyle: styles.colorTitle,
    titleAlign: 'center',
    animationDuration: 200,
    height: 420,
    dialogStyle: styles.colorToModal,
    dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
    children: (
      <View style={{flex: 1, backgroundColor: '#e6ffff'}}>
        <View>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Tipo de Finca</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({estateType: text})}}/>
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Tipo de Riego</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({irrigationType: text})}}/>
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Tipo de Planta</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({plantVariety: text})}}/>
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Localizacion</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({location: text})}}/>
          </Item>
          <Item floatingLabel>
            <Label style={{padding: '2%'}}>Nombre</Label>
            <Input autoCapitalize = 'none' onChangeText={(text)=>{this.setState({fincaName: text})}}/>
          </Item>
        </View>
        <DialogButton text='Aceptar' onPress={() => {this.postFincaRequest()}}/>
      </View>
      )
    });
  }

  async postFincaRequest(){
    var self = this;
    const token = await AsyncStorage.getItem(STORAGE_KEY);
    const user = await AsyncStorage.getItem(STORAGE_USER);
    axios({
      method: 'post',
      url: 'http://bender.singularfactory.com/sf_platalog_bo/web/api/fincas',
      headers :{
        'Authorization': 'Bearer ' + token,
        'Content-Type': 'application/json'
      },
      data: {
        estateType: this.state.estateType,
        irrigationType: this.state.irrigationType,
        plantVariety: this.state.plantVariety,
        location: this.state.location,
        fincaName: this.state.fincaName
      }
    })
    .then(function (response) {
      self.storageValues('fincaID', JSON.stringify(response.data.fincaID));
      self.setState({reload: true});
      DialogManager.dismiss();
    })
    .catch(function (error) {
      console.log(error);
    })
  }


  showDialog(finca){
    DialogManager.show({
    title: 'Nueva Finca',
    titleAlign: 'center',
    animationDuration: 200,
    height: 200,
    dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
    children: (
      <View style={{flex: 1}}>
        <View>
          <Item inlineLabel>
            <Label style={{padding: '2%'}}>Finalizacion:</Label>
            <Label style={{padding: '2%'}}>{finca.finca.limit_date.split('T')[0]}</Label>
          </Item>
          <Item inlineLabel>
            <Label style={{padding: '2%'}}>Nueva Fecha:</Label>
            <DatePicker
                 style={{width: 200}}
                 mode="date"
                 placeholder="select date"
                 format="YYYY-MM-DD"
                 maxDate="2018-01-31"
                 confirmBtnText="Confirm"
                 cancelBtnText="Cancel"
                 onDateChange={(date) => {this.onDateChange(date, finca.finca.id)}}
            />
          </Item>
        </View>
      </View>
      )
    });
  }

  mapFincas(){
    let one_day=1000*60*60*24;
        let startDate = new Date();
        let endDate = new Date();
        endDate.setMonth(startDate.getMonth() + 9);
        let untilDate = ((endDate.getTime() - startDate.getTime())/one_day) - ((endDate.getTime() - startDate.getTime())/one_day) + 1;
        let totalDays = ((endDate.getTime() - startDate.getTime())/one_day) + 1;
          return(
            <List dataArray={this.state.fincas} renderRow={(finca) =>
              <ListItem onLongPress={()=>{this.showDialog(finca)}}>
                <Left>
                  <View style={{flexDirection: 'column', flex:1}}>
                    <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{finca.finca.finca_name}</Text>
                  </View>
                </Left>
                <Right>
                  <View style={{flex: 1}}>
                    <Progress.Circle size={50} progress={1/(((new Date(finca.finca.limit_date.split('T')[0]).setMonth(new Date(finca.finca.limit_date.split('T')[0]).getMonth() + 9) - startDate.getTime())/one_day) + 1)} showsText={true}
                    formatText={()=>((1*100)/(((new Date(finca.finca.limit_date.split('T')[0]).setMonth(new Date(finca.finca.limit_date.split('T')[0]).getMonth() + 9) - startDate.getTime())/one_day) + 1)).toFixed(2)+'%'}
                    valueFormatter= '#'/>
                  </View>
                </Right>
              </ListItem>
              }>
            </List>
      );
     }

  render() {
    return (
      <View style={{flex: 1}}>
        {this.mapFincas()}
        <ActionButton buttonColor="blue" onPress={() => {this.showAddFincaDialog()}}/>
      </View>
    );
  }
}

const styles = StyleSheet.create({
  loginBtn: {
    marginHorizontal: 5,
    marginVertical: 10
  },
  map: {
    width: '100%',
    height: '100%'
  }
});
