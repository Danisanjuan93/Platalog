import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input,List, ListItem, Right,Left } from 'native-base';
import * as Progress from 'react-native-progress';
export default class TracingView extends Component {

  constructor(props){
    super(props)
    this.state={
      fincas: [{
                name: 'Finca1',
                progress: 40,
                location: 'Maspalomas',
                lastActivity: 'Recogida 10/07/2017'
              },
              {
                name: 'Finca2',
                progress: 20,
                location: 'Telde',
                lastActivity: 'Recogida 10/04/2017'
              },
              {
                name: 'Finca3',
                progress: 90,
                location: 'Arucas',
                lastActivity: 'Regar 18/07/2017'
              }]
      };
  }

  mapFincas(){
    return this.state.fincas.map((finca)=>{
      return(
        <ListItem onPress={()=>{}}>
          <Left>
            <View style={{flexDirection: 'column', flex:1}}>
              <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{finca.name}</Text>
              <Text style={{alignSelf:'flex-start', size: 5 }}>-{finca.lastActivity}</Text>
            </View>
          </Left>
          <Right>
            <View style={{flex: 1}}>
              <Progress.Circle size={50} progress={finca.progress/100} showsText={true} formatText={()=>finca.progress+'%'}/>
            </View>
          </Right>
        </ListItem>
      )
    })
  }
  render() {
    return (
    <List style={{flex: 1}}>
      {this.mapFincas()}
    </List>
    );
  }
}
