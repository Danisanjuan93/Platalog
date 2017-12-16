import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage, Dimensions, Platform, RefreshControl } from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Right, Left, Label } from 'native-base';
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
      markers: [{ latitude: LATITUDE, longitude: LONGITUDE, key: 1 }],
      ids: [],
      date: new Date(),
      reload: false,
      refreshing: false
    }
  }

  async componentDidUpdate(){
    if (this.state.reload){
      DialogManager.dismiss();
      this.setState({reload:false})
      this.getFincas();
    }
  }

  async componentWillMount() {
    this.getFincas();
  }

  async storageValues(item, selectedValue){
    try  {
      await AsyncStorage.setItem(item, selectedValue);
    } catch (error) {
      console.log('AsyncStorage error: ' + error.message);
    }
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

  _onRefresh() {
    this.setState({refreshing: true});
    this.getFincas().then(() => {
      this.setState({refreshing: false});
    });
  }

  onMapPress(e) {
    var newMarker = [{
      latitude: e.nativeEvent.coordinate.latitude,
      longitude: e.nativeEvent.coordinate.longitude,
      key: Date.now()
    }];
    this.setState({ markers: newMarker });
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
        self.storageValues(STORAGE_FINCAS_USER, JSON.stringify(response.data));
      })
      .catch(function (error) {
        AlertIOS.alert(
          "Error",
          JSON.stringify(error)
        )
      })
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

  renderProgress(finca){
    let one_day=1000*60*60*24;
    let startDate = new Date();
    let endDate = new Date(finca.finca.limit_date.split('T')[0]);
    endDate.setMonth(endDate.getMonth() + 9);
    let untilDate = ((endDate.getTime() - startDate.getTime())/one_day) - ((endDate.getTime() - startDate.getTime())/one_day) + 1;
    let totalDays = ((endDate.getTime() - startDate.getTime())/one_day) + 1;
    return (
      <Progress.Circle size={50} progress={untilDate/totalDays} showsText={true}
      formatText={()=>((untilDate*100)/totalDays).toFixed(2)+'%'}
      />
    )
  }

  mapFincas(){
    if (Platform.OS != 'ios'){
      return (
        <List dataArray={this.state.fincas} renderRow={(finca) =>
          <ListItem onPress={() => { }}>
            <View style={{ flex: 1, flexDirection: 'row' }}>
              <View style={{ flex: 1, flexDirection: 'row'}}>
                <View style={{ flex: 1, flexDirection: 'column' }}>
                  <Progress.Circle size={75} progress={40 / 100} showsText={true} formatText={() => 40 + '%'} color='#29A55E'/>
                  <Text style={{ alignSelf: 'flex-start',   fontWeight: 'bold', fontSize: 14, marginLeft: 15 }} >{finca.finca.finca_name}</Text>
                </View>
              </View>
              <View style={{ flex: 2, flexDirection: 'column' }}>
                <MapView
                  initialRegion={this.state.region}
                  onPress={(e) => this.onMapPress(e)}
                  style={styles.map}
                >
                  {this.state.markers.map(marker => (
                    <MapView.Marker
                      key={marker.key}
                      coordinate={{
                        latitude: LATITUDE,
                        longitude: LONGITUDE
                      }}
                      centerOffset={{ x: -18, y: -60 }}
                      anchor={{ x: 0.69, y: 1 }}
                    />
                  ))}
                </MapView>
              </View>
            </View>
          </ListItem>
        }>
        </List>
      );
    }else{

        return(
          <List dataArray={this.state.fincas} renderRow={(finca) =>
            <ListItem onLongPress={()=>{this.showDialog(finca)}}>
              <Left>
                <View style={{flexDirection: 'column', flex:1}}>
                  <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{finca.finca.finca_name}</Text>
                  <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{finca.finca.location}</Text>
                </View>
              </Left>
              <Right>
                <View style={{flex: 1}}>
                  {this.renderProgress(finca)}
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
    }

  render() {
    return (
      <View style={{flex: 1}}>
        {this.mapFincas()}
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
  },
  colorToModal:{
    backgroundColor: '#008080',
  },
  colorTitle:{
    color: 'white',
    fontWeight: 'bold'
  }
});
