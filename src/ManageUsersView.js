import React, { Component } from 'react';
import {StyleSheet,View, ScrollView} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Text, Form, Item, Input,List, ListItem, Drawer, Right, Left, Title, Header } from 'native-base';
import SearchBar from 'react-native-searchbar';
import ActionButton from 'react-native-action-button';
import ModalDropdown from 'react-native-modal-dropdown';
import DialogManager, { SlideAnimation, DialogContent, DialogButton } from 'react-native-dialog-component';
export default class ManageUsersView extends Component {

  constructor(props){
    super(props)
    this.state={
      workerList:[
                  {
                    id: 1,
                    location: 'Finca1',
                    worker: 'Daniel',
                  },
                  {
                    id: 2,
                    location: 'Finca2',
                    worker: 'Eduardo',
                  },
                  {
                    id: 3,
                    location: 'Finca2',
                    worker: 'Alvaro',
                  }
,                  {
                    id: 4,
                    location: 'Finca3',
                    worker: 'Manuel',
                  }
,                  {
                    id: 5,
                    location: 'Finca1',
                    worker: 'Suso',
                  }
,                  {
                    id: 6,
                    location: 'Finca2',
                    worker: 'Mario',
                  }
,                  {
                    id: 7,
                    location: 'Finca1',
                    worker: 'Raquel',
                  }
,                  {
                    id: 8,
                    location: 'Finca2',
                    worker: 'Pedro',
                  }
                ],
      locations: ['Finca1','Finca2','Finca3'],
      results:[],
    }
  }
  componentWillMount(){
    this.setState({results: this.state.workerList}, ()=>{console.log(this.state.results)});
  }
  _handleResults= (e) => {
      this.setState({results: e }, ()=>{console.log(this.state.results)});

  }
  renderHeader= () =>{
    return(
      <Header>
          <Left/>
          <Title style={{alignSelf: 'center'}}>
            {this.props.title}
          </Title>
        <SearchBar
          ref={(ref) => this.searchBar = ref}
          data={this.state.workerList}
          handleResults={this._handleResults}
          allDataOnEmptySearch
          autoCapitalize
          placeholder='Localización,trabajador...'
          style={{flex: 1}}
        />
      <Right>
        <Button transparent onPress={()=> this.searchBar.show()}>
          <Icon name='search'/>
        </Button>
      </Right>
      </Header>
      )
}
  mapWorkers(){
    return this.state.results.map((worker)=>{
      return(
        <ListItem onPress={()=>{}}>
          <Left>
            <View style={{flexDirection: 'column'}}>
              <Text style={{alignSelf:'flex-start'}}>{worker.worker}</Text>
            </View>
          </Left>
          <Right>
            <View style={styles.pendingActivity}>
              <Text style={{color: 'white', fontSize: 10, alignSelf: 'center'}}>{worker.location}</Text>
            </View>
          </Right>
        </ListItem>
      )
    })
  }
  showAddActivityDialog(){
    let asignedZone;
    let asignedWorker;
    DialogManager.show({
    title: 'Asignar actividad',
    titleAlign: 'center',
    animationDuration: 200,
    height: 200,
    dialogAnimation: new SlideAnimation({slideFrom: 'bottom'}),
    children: (
      <View style={{flex: 1}}>
          <Form style={{flex: 1}}>
            <Item>
              <Input  placeholder='Nombre...'  value={asignedWorker} onChangeText={(text)=> asignedWorker = text}/>
            </Item>
              <ModalDropdown textStyle={{fontSize:15}}  style={{marginVertical: 10, marginHorizontal: 17 }} options={this.state.locations} defaultValue='Zona...' onSelect={(idx,value)=>{asignedZone = value}}/>
          </Form>
        <DialogButton text='Aceptar' onPress={()=>{
            this.newWorker(asignedZone, asignedWorker)
            }}/>
      </View>
    ),
  }, () => {
    console.log('callback - show');
  });
  }
  newWorker(zone,worker){
    if(worker != undefined && zone != undefined){
      let currentWorkers = this.state.workerList;
      currentWorkers.push({
                            id: 9,
                            worker: worker,
                            location: zone
                            })
      this.setState({workerList: currentWorkers});
      DialogManager.dismiss();
    }
  }
  render() {
    return (
      <View style={{flex: 1}}>
        {this.renderHeader()}
        <ScrollView style={{flex: 1}}>
          <List>
            {this.mapWorkers()}
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
