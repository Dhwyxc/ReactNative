import axios from 'axios';
import React, { useEffect, useState } from 'react';
import { Text, View, ScrollView } from 'react-native';
import { createStackNavigator } from '@react-navigation/stack';
import Signin from './Signin';
import Signup from './Signup';
import OrderDetail from './../user/OrderDetail';
const Stack = createStackNavigator();

const RootAuth = () => {

    return (
           <Stack.Navigator>
               <Stack.Screen  options={{headerShown: false}} name="Signin" component={Signin} />
                <Stack.Screen  options={{headerShown: false}} name="Signup" component={Signup} /> 
                <Stack.Screen   name="OrderDetail" component={OrderDetail} />           
            </Stack.Navigator>
    );
}
export default RootAuth;