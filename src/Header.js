import React, { Component } from 'react';
import { StyleSheet, View, Platform } from 'react-native';
import { Actions } from 'react-native-router-flux';
import { Button,Icon, Header,Left,Right,Text,Body, Form, Item, Input,Title } from 'native-base';
export default class MyHeader extends Component {

  renderLeftIcon(){
    if(this.props.menu){
      return(
        <Left>
          <Button transparent onPress={this.props.showMenu}>
            <Icon style={{color: "white"}} name='menu'/>
          </Button>
        </Left>
      )
    }else if (this.props.backArrow && Platform.OS == 'ios'){
      return (
        <Left>
          <Button transparent onPress={() => Actions.pop({refresh: {close: Math.random(), results: [], activities: []}})}>
            <Icon style={{color: 'white'}} name='ios-arrow-back-outline'/>
          </Button>
        </Left>
      )
    }else if (this.props.logo && Platform.OS == 'ios'){
      return (
        <Left>
          <Button transparent>
            <Icon style={{color: 'white'}} name='logo-apple'/>
          </Button>
        </Left>
      )

    }
  }

  renderRightIcon(){
    if(this.props.add){
      return(
        <Right>
          <Button transparent onPress={this.props.showDialog}>
            <Icon style={{color: 'white'}} name='ios-add-circle-outline'/>
          </Button>
        </Right>
      )
    }else{
      return (
        <Right></Right>
      )
    }

  }

  render() {
    return (
      <Header style={{backgroundColor: '#008080'}}>
        {this.renderLeftIcon()}
        <Body>
          <Title style={{color: 'white', width: 150}}>{this.props.title}</Title>
        </Body>
        {this.renderRightIcon()}
      </Header>
    );
  }
}

const styles = StyleSheet.create({
  container:{
    backgroundColor: '#2FBF6D',
    shadowOffset: {height: 0, width: 0},
    shadowOpacity: 0,
    elevation: 0
  },
  container_shadow:{
    backgroundColor: '#2FBF6D',
  }
});
