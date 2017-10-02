import React, { Component } from 'react';
import {StyleSheet,View, ScrollView} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input,List, ListItem, Drawer, Right, Left } from 'native-base';
import Header from './Header';
import ActionButton from 'react-native-action-button';
import ModalDropdown from 'react-native-modal-dropdown';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
export default class ManageActivitiesView extends Component {

  constructor(props){
    super(props)
    this.state={
      activities:[
                  {
                    id: 1,
                    activity: 'Regar',
                    worker: 'Daniel',
                    location: 'Finca1',
                    state: 'Finalizado'
                  },
                  {
                    id: 2,
                    activity: 'Regar',
                    worker: 'Daniel',
                    location: 'Finca1',
                    state: 'Pendiente'
                  },
                  {
                    id: 3,
                    activity: 'Regar',
                    worker: 'Daniel',
                    location: 'Finca1',
                    state: 'Pendiente'
                  }
,                  {
                    id: 4,
                    activity: 'Regar',
                    worker: 'Daniel',
                    location: 'Finca1',
                    state: 'Pendiente'
                  }
,                  {
                    id: 5,
                    activity: 'Regar',
                    worker: 'Daniel',
                    location: 'Finca1',
                    state: 'Finalizado'
                  }
,                  {
                    id: 6,
                    activity: 'Regar',
                    worker: 'Daniel',
                    location: 'Finca1',
                    state: 'Pendiente'
                  }
,                  {
                    id: 7,
                    activity: 'Regar',
                    worker: 'Daniel',
                    location: 'Finca1',
                    state: 'Finalizado'
                  }
,                  {
                    id: 8,
                    activity: 'Regar',
                    worker: 'Daniel',
                    location: 'Finca1',
                    state: 'Pendiente'
                  }
                ],
      workers: ['Alvaro','Daniel','Carlos','Pedro'],
      activitiesOptions: ['Regar','Sembrar','Recoger','Deshijar']
    }
  }
  mapActivities(){
    return this.state.activities.map((activity)=>{
      return(
        <ListItem onPress={()=>{}}>
          <Left>
            <View style={{flexDirection: 'column'}}>
              <Text style={{alignSelf:'flex-start'}}>{activity.activity+'-'+activity.worker}</Text>
              <Text style={{fontWeight: 'bold', alignSelf:'flex-start' }}>{activity.location}</Text>
            </View>
          </Left>
          <Right>
            <View style={activity.state == 'Finalizado' ? styles.finishedActivity : styles.pendingActivity}>
              <Text style={{color: 'white', fontSize: 10, alignSelf: 'center'}}>{activity.state}</Text>
            </View>
          </Right>
        </ListItem>
      )
    })
  }
  showAddActivityDialog(){
    let asignedWorker;
    let asignedActivity;
    DialogManager.show({
    title: 'Asignar actividad',
    titleAlign: 'center',
    animationDuration: 200,
    height: 200,
    dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
    children: (
      <View style={{flex: 1}}>
        <View style={{flexDirection:'row', alignSelf:'center', marginVertical:5}}>
          <Text>Trabajador: </Text>
          <ModalDropdown textStyle={{fontSize:15}}  style={{marginHorizontal: 5}} options={this.state.workers} defaultValue='Trabajador...' onSelect={(idx,value)=>{asignedWorker = value}}/>
        </View>
        <View style={{flexDirection:'row',alignSelf:'center', marginVertical: 5}}>
          <Text>Actividad: </Text>
          <ModalDropdown textStyle={{fontSize:15}} style={{marginHorizontal: 5}} options={this.state.activitiesOptions} defaultValue='Actividad...' onSelect={(idx,value)=>{asignedActivity = value}}/>
        </View>
        <DialogButton text='Aceptar' onPress={()=>{
            this.asignActivity(asignedWorker, asignedActivity)
            }}/>
      </View>
    ),
  }, () => {
    console.log('callback - show');
  });
  }
  asignActivity(worker,activity){
    if(worker != undefined && activity != undefined){
      let currentActivities = this.state.activities;
      currentActivities.push({
                            id: 9,
                            activity: activity,
                            worker: worker,
                            location: 'Unknown',
                            state: 'Pendiente'
                            })
      this.setState({activities: currentActivities});
      DialogManager.dismiss();
    }
  }
  render() {
    return (
      <View style={{flex: 1}}>
        <Header title={this.props.title}/>
        <ScrollView style={{flex: 1}}>
          <List>
            {this.mapActivities()}
          </List>
        </ScrollView>
        <ActionButton buttonColor="blue" onPress={()=>{this.showAddActivityDialog()}}/>
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
  }
});
