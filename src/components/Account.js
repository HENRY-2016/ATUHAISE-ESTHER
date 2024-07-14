

import React from 'react';
import { Text,Image,TouchableOpacity,ScrollView, Alert,View} from 'react-native';
import { Entypo } from '@expo/vector-icons';
import AsyncStorage from '@react-native-async-storage/async-storage';

import styles from "../utilities/stylesheet";
import { COLORS } from '../utilities/colors';
import userIcon from '../imgs/user.png';
import {convertToCapitalLetters} from '../utilities/Functions';

export default class Account extends React.Component {
    
constructor(props){
    
    super(props);
    this.state = {
        UserName:'',
        UserRegNum:'',
        UserDob:'',
        UserCourse:'',
        UserSupervisor:'',


        
    }    
}
UNSAFE_componentWillMount () {
    this.initializeUserAccount()
        
}

componentDidMount(){
}

initializeUserAccount = () => 
    {
        try 
        {   
            AsyncStorage.getItem('UserDetails').then((Details)=>{
            if (Details !== null) {
                // We have data!!

                const jsonData = JSON.parse(Details)
                let userName = jsonData[0].UserName;
                let userRegNum = jsonData[0].UserRegNum;
                let userDob= jsonData[0].UserDob;
                let userCourse= jsonData[0].UserCourse;
                let userSupervisor= jsonData[0].UserSupervisor;
    
    
                this.setState({UserName:userName});
                this.setState({UserRegNum:userRegNum});
                this.setState({UserDob:userDob});
                this.setState({UserCourse:userCourse});
                this.setState({UserSupervisor:userSupervisor});
    
            }
            else {this.setState({DoNotShowLogInScreen:true})}
            })
        }catch (error) { console.log(error)}
    }
    logOutUser = async () => 
        {
            try 
            {   
                await AsyncStorage.removeItem ('UserDetails');
                Alert.alert("Information","You Have Logged Out Of The Application")
        
            }catch (error) { console.log(error)}
        }
        
render() {
    const {} =this.state;
    return (
        <View style={styles.mainView}>
            <View style={{height:20}} ></View>
            <ScrollView showsVerticalScrollIndicator={false}>
                <View style={[styles.displayCard]} >
                    
                    <View style={{alignItems:'center'}}>
                        <View style={{height:10}} ></View>
                        <View >
                            <Image source={userIcon} style={[styles.userIcon]} />
                        </View>
                    </View>

                    <View style={{height:10}} ></View>
                    <View >
                        <Text style={[styles.blackTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]}>Name : { convertToCapitalLetters(this.state.UserName)}</Text>
                        <Text style={[styles.blackTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]}>Course : {this.state.UserCourse}</Text>
                        <Text style={[styles.blackTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]}>Reg No : {this.state.UserRegNum}</Text>
                        <Text style={[styles.blackTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]}>Supervisor : {this.state.UserSupervisor}</Text>
                        <Text style={[styles.blackTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]}>Email : {this.state.UserDob}</Text>
                    </View>
                    <View style={{height:10}} ></View>
                </View>
                    <View style={{height:15}} ></View>
                    <TouchableOpacity  onPress={()=>this.logOutUser()} >
                        <View style={[styles.buttonsStyle, styles.logoutButton]}>
                            <View style={{flexDirection:'row'}}>
                                <View>
                                    <Text style={[styles.whiteTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]} > LOG OUT  </Text>
                                </View>
                                <View >
                                    <Entypo name="log-out" size={24} color={COLORS.whiteColor} style={styles.recordButtonsIcon} />
                                </View>
                            </View>
                        </View>
                </TouchableOpacity>
                <View style={{height:20}} ></View>
            </ScrollView>
        </View>
    );
}
}
