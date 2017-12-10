import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage } from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Right, Left, Label } from 'native-base';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
import DatePicker from 'react-native-datepicker';
import * as Progress from 'react-native-progress';
import axios from 'axios';

const STORAGE_FINCAS_USER = 'fincas_user';
const STORAGE_KEY = 'access_token';
const STORAGE_USER = 'user_data';

export default class TracingView extends Component {

  constructor(props){
    super(props)
    this.state={
      fincas: [],
      ids: [],
      date: new Date()
    }
  }

  componentWillMount(){
    this.getFincas();
  }

  async getFincas(){
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
      self.setState({fincas: response.data})
      self.storageValues(STORAGE_FINCAS_USER, JSON.stringify(response.data))
    })
    .catch(function (error) {
      AlertIOS.alert(
        "Error",
        JSON.stringify(error)
      )
    })
  }

  async storageValues(item, selectedValue){
    try  {
      await AsyncStorage.setItem(item, selectedValue);
    } catch (error) {
      console.log('AsyncStorage error: ' + error.message);
    }
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
      <View>
        {this.mapFincas()}
      </View>
    );
  }
}

const styles = StyleSheet.create({
  loginBtn:{
    marginHorizontal: 5,
    marginVertical: 10
  }
});
