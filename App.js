import React, {useState, useEffect} from 'react';
import { Text, View,TextInput,Alert,TouchableOpacity,Image, ScrollView } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import axios from "axios";
import { createMaterialTopTabNavigator } from '@react-navigation/material-top-tabs';
import AsyncStorage from '@react-native-async-storage/async-storage';

import { APILogIn } from './src/utilities/APIs';
import { Entypo } from '@expo/vector-icons';
import { COLORS } from './src/utilities/colors';
import userIcon from './src/imgs/icon.png';
import styles from './src/utilities/stylesheet';
import RecordScreen from "./src/components/Record";
import HomeScreen from "./src/components/Home";
import AccountScreen from "./src/components/Account";





const Tab = createMaterialTopTabNavigator();

function MyTabs() {
	const StudentRegNumber = 'DIT098';
return (
	
	<Tab.Navigator
	
	screenOptions={{
		
		tabBarLabelStyle: { fontSize: 15,color:COLORS.white },
		// activeTintColor: 'white',
		// inactiveTintColor: 'black',
		tabBarItemStyle: { color:COLORS.whiteColor },
		tabBarStyle: { backgroundColor: COLORS.primaryColor, marginTop:25 },
		tabBarOptions : {
			// activeTintColor: '#ffffff',
            // inactiveTintColor: '#36A7E7',
			tabBarActiveTintColor:COLORS.brownColor,	
			tabBarInactiveTintColor:COLORS.whiteColor,
		}
	}}
	>
	<Tab.Screen name="Home" component={HomeScreen} />
	{props => <HomeScreen {...props} StudentRegNumber={StudentRegNumber} />}
	<Tab.Screen name="Record" component={RecordScreen} />
	<Tab.Screen name="Account" component={AccountScreen} />
	</Tab.Navigator>
);
}


export default function App() {

	const [showSplashScreen , setShowSplashScreen] = useState(true);
	const [studentDob , setStudentDob] = useState('');
	const [userRegNumber, setUserRegNumber] = useState('');
	const [studentRegNum , setStudentRegNum] = useState('');

	// setTimeout(()=>{ setShowSplashScreen(false)},4000);

	useEffect(() => {
		try 
        {   
            AsyncStorage.getItem('UserDetails').then((Details)=>{
            if (Details !== null) { 
				const jsonData = JSON.parse(Details)
                let userRegNum = jsonData[0].UserRegNum;
				setUpUserRegNumber(userRegNum);
				setShowSplashScreen(false);
			}
            else {setShowSplashScreen(true)};
            })
        }catch (error) { console.log(error)}

	},[])

	const setUserRegNum = (text) =>{setStudentRegNum(text)}
	const setUserDob = (text) =>{setStudentDob(text)}
	const setUpUserRegNumber = (text) =>{setUserRegNumber(text)}

	const login = async () =>{
		// setShowSplashScreen(false);

		console.log(studentRegNum + "|" +studentDob)
        try
        {
            const postRequest = await axios.post(APILogIn,
                {
                    "regNum" :studentRegNum,
                    "email":studentDob,
                }
            )
            
            let results = postRequest.data;
            let jsonString = JSON.stringify(results)
            let jsonResults =JSON.parse(jsonString);

            if (results.length == 0)
            {Alert.alert("Sorry","\n\n  No Students Records Found \n\n Try Again")}
            else
            {
                let DBRegNum = jsonResults[0].regNum;
                let DBDob  = jsonResults[0].email;
                if ((studentRegNum !== DBRegNum)&&(studentDob !== DBDob ))
                    {Alert.alert("Sorry ","\n\n Invalid Student Credentials \n\nReg Number\n Or\n DOD \n\nTry Again")}

                else
                {
                    let userName= jsonResults[0].fullName;
                    let userCourse = jsonResults[0].course;
                    let userPlace = jsonResults[0].palace;
                    let userDob = jsonResults[0].email;
                    let userRegNum = jsonResults[0].regNum;
                    let userSupervisor = jsonResults[0].supervisor;

					console.log("===="+userPlace)
                    try {
                        let userAccount={UserName:userName,UserRegNum:userRegNum,UserPalace:userPlace,UserDob:userDob,UserCourse:userCourse,UserSupervisor:userSupervisor}
                        const Details  = []
                        Details.push(userAccount)
                        await AsyncStorage.setItem('UserDetails',JSON.stringify(Details));
                        } 
                    catch (error) {console.log(error)}
					setUpUserRegNumber(userRegNum);
					setShowSplashScreen(false);
                }
            }

            // Alert.alert("Status",name+"\n\n"+results);
        }
        catch (error)
            {
                console.log("===========>>>>>>>>>>"+error)
                Alert.alert("An Error", error+"\n\nHost Not Found \n Check Your Network Connections\n\n")
            };
    }
return (
	<NavigationContainer>
		{
			showSplashScreen ?(<>
				<View style={styles.mainView}>
					<ScrollView showsVerticalScrollIndicator={false}>
						<View style={{marginTop:'50%', alignItems :'center'}}>
							<View style={{alignItems:'center'}}>
								<View style={{height:10}} ></View>
								<View >
									<Image source={userIcon} style={[styles.userIcon]} />
								</View>
							</View>
							<View style={{height:20}} ></View>
							<View>
								<Text style={[styles.redTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]}> “LOG IN TO CONTINUE!”</Text>
							</View>
						</View>
						<View style={{height:20}} ></View>
						<View>
							<TextInput style={styles.inputs} value={studentRegNum} onChangeText={setUserRegNum}  placeholder="Registration Number ..."placeholderTextColor ={COLORS.secondaryColor}/>
							<TextInput style={styles.inputs} onChangeText={setUserDob} placeholder="... student Email ..."placeholderTextColor ={COLORS.secondaryColor} 
							selectionColor={COLORS.primaryColor}/>
						</View>
						<View style={styles.bottomView}>
							<TouchableOpacity onPress={()=>login()} >
								<View style={[styles.buttonsStyle, styles.nextButton]}>
									<View style={{flexDirection:'row'}}>
										<View>
											<Text style={[styles.whiteTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]} > LOG IN  </Text>
										</View>
										<View >
											<Entypo name="log-out" size={24} color={COLORS.whiteColor} style={styles.recordButtonsIcon} />
										</View>
									</View>
								</View>
							</TouchableOpacity>
							<View style={{height:20}} ></View>
						</View>
					</ScrollView>
				</View>
			</>):
			// <MyTabs />
			
			<Tab.Navigator
				screenOptions={{
					
					tabBarLabelStyle: { fontSize: 15,color:COLORS.white },
					// activeTintColor: 'white',
					// inactiveTintColor: 'black',
					tabBarItemStyle: { color:COLORS.whiteColor },
					tabBarStyle: { backgroundColor: COLORS.primaryColor, marginTop:25 },
					tabBarOptions : {
						// activeTintColor: '#ffffff',
						// inactiveTintColor: '#36A7E7',
						tabBarActiveTintColor:COLORS.brownColor,	
						tabBarInactiveTintColor:COLORS.whiteColor,
					}
				}}
				>
				<Tab.Screen name="Home" component={HomeScreen} initialParams={{ StudentRegNumber: userRegNumber }} />
				<Tab.Screen name="Record" component={RecordScreen} />
				<Tab.Screen name="Account" component={AccountScreen} />
			</Tab.Navigator>
		}
	</NavigationContainer>
);
}

// eas build -p android --profile preview
// eas build --platform android