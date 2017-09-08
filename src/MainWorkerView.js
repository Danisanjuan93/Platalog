import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input,List, ListItem } from 'native-base';
import Header from './Header';
export default class MainWorkerView extends Component {

  constructor(props){
    super(props)
    this.state={
      pendingActivities: [{
        name: 'Regar',
        worker: 'Yo',
        zone: 'Tafira'
      },
      {
        name: 'Recoger',
        worker: 'Yo',
        zone: 'Telde'
      }]
    }
  }
  mapPendingActivities(){
    return this.state.pendingActivities.map((activity)=>{
      return(
        <ListItem onPress={()=>{Actions.pendingActivityDetails({content: activity})}}>
          <View style={{flexDirection: 'column'}}>
            <Text style={{alignSelf:'flex-start'}}>{activity.name+'-'+activity.zone}</Text>
            <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{activity.worker}</Text>
          </View>
        </ListItem>
      )
    })
  }
  render() {
    return (
    <View style={{flex: 1}}>
      <Header title={this.props.title}/>
      <List style={{flex: 1}}>
        {this.mapPendingActivities()}
      </List>
    </View>
    );
  }
}
