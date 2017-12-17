import React, { Component } from 'react';
import {StyleSheet, View, AlertIOS, AsyncStorage, Dimensions, Platform, RefreshControl } from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button, Icon, Text, Form, Item, Input, List, ListItem, Right, Left, Label } from 'native-base';
import Header from './Header';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
import ActionButton from 'react-native-action-button';
import DatePicker from 'react-native-datepicker';
import * as Progress from 'react-native-progress';
import MapView from 'react-native-maps';
import { PROVIDER_GOOGLE, PROVIDER_DEFAULT } from 'react-native-maps';
import axios from 'axios';

const { width, height } = Dimensions.get('window');
const ASPECT_RATIO = width / height;
const LATITUDE = 27.958611111111;
const LONGITUDE = -15.5925;
const LATITUDE_DELTA = 0.0922;
const LONGITUDE_DELTA = LATITUDE_DELTA * ASPECT_RATIO;
const SPACE = 0.01;
export default class CustomMap extends Component {

  constructor(props) {
    super(props)
    this.state = {
      region: {
        latitude: 27.958611111111 + this.props.id,
        longitude: -15.5925 + this.props.id,
        latitudeDelta: 0.0922,
        longitudeDelta: 0.0421,
      },
      markerLatitude: LATITUDE + SPACE,
      markerLongitude: LONGITUDE + SPACE,
      marker1: true,
      markers: [{ latitude: LATITUDE, longitude: LONGITUDE, key: 1 }]
    }
  }

  onMapPress(e) {
    var newMarker = [{
      latitude: e.nativeEvent.coordinate.latitude,
      longitude: e.nativeEvent.coordinate.longitude,
      key: Date.now()
    }];
    this.setState({ markers: newMarker });
  }

  mapFincas(){
      return (
        <View style={{ flex: 1, flexDirection: 'row' }}>
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
                    latitude: LATITUDE + this.props.id,
                    longitude: LONGITUDE + this.props.id
                  }}
                  centerOffset={{ x: -18, y: -60 }}
                  anchor={{ x: 0.69, y: 1 }}
                />
              ))}
            </MapView>
          </View>
        </View>
      );
    }

  render() {
    return (
      <View style={{flex: 1}}>
        <Header title={this.props.title} backArrow/>
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
  dialogStyle:{
    backgroundColor: '#008080'
  },
  font:{
    color: 'white',
    fontWeight: 'bold'
  }
});
