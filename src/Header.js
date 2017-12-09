import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Icon, Header,Left,Right,Text,Body, Form, Item, Input,Title } from 'native-base';
export default class MyHeader extends Component {

  renderLeftIcon(){
    if(this.props.menu){
      return(
        <Left>
          <Button transparent onPress={this.props.showMenu}>
            <Icon name='menu'/>
          </Button>
        </Left>
      )
    }else if (this.props.backArrow){
      return (
        <Left>
          <Button transparent onPress={() => Actions.pop({refresh: {results: [], activities: []}})}>
            <Icon name='ios-arrow-back-outline'/>
          </Button>
        </Left>
      )
    }
  }

  renderRightIcon(){
    return <Right/>;
  }

  render() {
    return (
      <Header style={this.props.doShadow ? styles.container_shadow : styles.container}>
        {this.renderLeftIcon()}
        <Body>
          <Title>{this.props.title}</Title>
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
