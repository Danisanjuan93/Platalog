import React, { Component } from 'react';
import {StyleSheet,View} from 'react-native';
import {Actions} from 'react-native-router-flux';
import { Button,Text, List, ListItem } from 'native-base';
export default class HistoricView extends Component {

  constructor(props){
    super(props)
    this.state={
        historic: [{
                    finca: 'Finca1',
                    date: '20-07-2017',
                    worker: 'Daniel',
                    activity: 'Recoger'
                  },
                  {
                    finca: 'Finca4',
                    date: '10-12-2017',
                    worker: 'Daniel',
                    activity: 'Regar'
                  },
                  {
                    finca: 'Finca2',
                    date: '10-07-2017',
                    worker: 'Daniel',
                    activity: 'Regar'
                  },
                  {
                    finca: 'Finca3',
                    date: '19-07-2017',
                    worker: 'Daniel',
                    activity: 'Deshijado'
                    },
                    {
                      finca: 'Finca1',
                      date: '10-02-2017',
                      worker: 'Daniel',
                      activity: 'Sembrado'
                    }]
    }
  }
  mapHistoric(){
    return this.state.historic.map((historicEntry)=>{
      return(
        <ListItem onPress={()=>{}}>
          <View style={{flexDirection: 'column'}}>
            <Text style={{alignSelf:'flex-start'}}>{historicEntry.finca + ': ' + historicEntry.worker + ' realizó la tarea ' + historicEntry.activity}</Text>
            <Text style={{fontWeight: 'bold', alignSelf:'flex-start', size: 5 }}>{historicEntry.date}</Text>
          </View>
        </ListItem>
      )
    })
  }
  render() {
    return (
    <List style={{flex: 1}}>
      {this.mapHistoric()}
    </List>
    );
  }
}
