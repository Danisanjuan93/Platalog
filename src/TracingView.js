import React, { Component } from 'react';
import { StyleSheet, View, AlertIOS, AsyncStorage, Dimensions } from 'react-native';
import { Actions } from 'react-native-router-flux';
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Right, Left } from 'native-base';
import * as Progress from 'react-native-progress';
import MapView from 'react-native-maps';
import { PROVIDER_GOOGLE, PROVIDER_DEFAULT } from 'react-native-maps';
import axios from 'axios';
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
      headers: {
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
  mapFincas() {
    console.log(this.state.markers)
    return (
      <List dataArray={this.state.fincas} renderRow={(finca) =>
        <ListItem onPress={() => { }}>
          <View style={{ flex: 1, flexDirection: 'row' }}>
            <View style={{ flex: 1, flexDirection: 'row'}}>
              <View style={{ flex: 1, flexDirection: 'column' }}>
                <Progress.Circle size={75} progress={40 / 100} showsText={true} formatText={() => 40 + '%'} color='#29A55E'/>
                <Text style={{ alignSelf: 'flex-start',   fontWeight: 'bold', fontSize: 14, marginLeft: 15 }} >Pruebita</Text>
                <Text style={{ alignSelf: 'flex-start', fontSize: 11, marginLeft: 15 }} >Pruebita</Text>
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
  loginBtn: {
    marginHorizontal: 5,
    marginVertical: 10
  },
  map: {
    width: '100%',
    height: '100%'
  }
});
