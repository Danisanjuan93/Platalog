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
  }else{
    return <Left/>;
  }

}
renderRightIcon(){
  return <Right/>;
}
  render() {
    return (
      <Header>
        {this.renderLeftIcon()}
        <Body>
          <Title>{this.props.title}</Title>
        </Body>
        {this.renderRightIcon()}
      </Header>
    );
  }
}