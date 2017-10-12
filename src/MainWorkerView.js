import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import SearchBar from 'react-native-searchbar'
import { Button,Icon, Text, Form, Item, Input,List, ListItem,Header, Right } from 'native-base';
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
      <Header title={this.props.title}>
        <SearchBar
          ref={(ref) => this.searchBar = ref}
          data={this.state.pendingActivities}
          handleResults={this._handleResults}
          showOnLoad
          allDataOnEmptySearch
          autoCapitalize
          placeholder='Trabajador, finca, actividad...'
          hideBack
          style={{flex: 1}}
        />
      <Right>

      </Right>
      </Header>
      <List style={{flex: 1}}>
        {this.mapPendingActivities()}
      </List>
    </View>
    );
  }
}
