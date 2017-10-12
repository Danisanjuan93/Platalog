import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import SearchBar from 'react-native-searchbar'
import { Button,Icon, Text, Form, Item, Input,List, ListItem,Header, Right, Title, Body,Left } from 'native-base';
import MyHeader from './Header';
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
      }],
      results: []
    }
  }
  componentWillMount(){
    this.setState({results: this.state.pendingActivities});
  }
  _handleResults= (e) => {
      this.setState({results: e }, ()=>{console.log(this.state.results)});

  }
  mapPendingActivities(){
    return this.state.results.map((activity)=>{
      return(
        <ListItem onPress={()=>{Actions.pendingActivityDetails({content: activity})}}>
          <View style={{flexDirection: 'column'}}>
            <Text style={{alignSelf:'flex-start', fontSize: 17}}>{activity.name}</Text>
            <Text style={{fontWeight: 'bold', alignSelf:'flex-start', fontSize: 11 }}>{activity.zone}</Text>
          </View>
        </ListItem>
      )
    })
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
          data={this.state.pendingActivities}
          handleResults={this._handleResults}
          allDataOnEmptySearch
          autoCapitalize
          placeholder='Localización, actividad...'
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
  render() {

    return (
    <View style={{flex: 1}}>
      {this.renderHeader()}
      <List style={{flex: 1}}>
        {this.mapPendingActivities()}
      </List>
    </View>
    );
  }
}
