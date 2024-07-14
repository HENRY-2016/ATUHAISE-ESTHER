

import React from 'react';
import { Text,TextInput,Platform,TouchableOpacity,Alert,ScrollView, View} from 'react-native';
import { FontAwesome,MaterialIcons,Entypo } from '@expo/vector-icons';
import axios from "axios";
import AsyncStorage from '@react-native-async-storage/async-storage';
import {Picker} from '@react-native-picker/picker';
import styles from "../utilities/stylesheet";
import { COLORS } from '../utilities/colors';
import {APIUserPost} from '../utilities/APIs';
export default class Record extends React.Component {
    
constructor(props){
    
    super(props);
    this.state = {
        ActivitiesInputs:[{data:''}],
        SkillsInputs:[{data:''}],
        ChallengesInputs:[{data:''}],
        NotesInputs:[{data:''}],
        WeekSelectedValue:'',
        DaySelectedValue:'',

        UserName:'',
        UserRegNum:'',
        UserDob:'',
        UserCourse:'',
        UserSupervisor:'',

        Weeks : [
            {Week:"Week-1"},
            {Week:"Week-2"},
            {Week:"Week-3"},
            {Week:"Week-4"},
            {Week:"Week-5"},
            {Week:"Week-6"},
        ],
        Days : [
            {Day:"Day-1"},
            {Day:"Day-2"},
            {Day:"Day-3"},
            {Day:"Day-4"},
            {Day:"Day-5"},
            {Day:"Day-6"},
        ]

        
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
setActivitiesTextInputs = (InputsArray) =>{this.setState({ActivitiesInputs:InputsArray})}
setSkillsTextInputs = (InputsArray) =>{this.setState({SkillsInputs:InputsArray})}
setChallengesTextInputs = (InputsArray) =>{this.setState({ChallengesInputs:InputsArray})}
setNotesTextInputs = (InputsArray) =>{this.setState({NotesInputs:InputsArray})}


handleAdd = (currentInputs,inputsToSet) =>
{
    // console.log("Adding..");
    const newInputs = [...currentInputs];
    newInputs.push('');

    if(inputsToSet === 'Activities'){this.setActivitiesTextInputs(newInputs)}
    else if(inputsToSet === 'Skills'){this.setSkillsTextInputs(newInputs)}
    else if(inputsToSet === 'Challenges'){this.setChallengesTextInputs(newInputs)}
    else if(inputsToSet === 'Notes'){this.setNotesTextInputs(newInputs)}   
}
handleActivitiesAdd = () =>
{
    // console.log("Adding..");
    const newInputs = [...this.state.ActivitiesInputs];
    newInputs.push('');
    this.setState({ActivitiesInputs:newInputs})
}
handleDelete = (currentInputs,inputsToSet) =>
{
    // console.log("Deleting..");
    const newInputs = [...currentInputs];
    newInputs.pop();
    if(inputsToSet === 'Activities'){this.setActivitiesTextInputs(newInputs)}
    else if(inputsToSet === 'Skills'){this.setSkillsTextInputs(newInputs)}
    else if(inputsToSet === 'Challenges'){this.setChallengesTextInputs(newInputs)}
    else if(inputsToSet === 'Notes'){this.setNotesTextInputs(newInputs)}   
}
handleTextInputChange = (text,index,currentInputs,inputsToSet) =>
{
    // console.log("Handling Changes..");
    const newInputs = [...currentInputs];
    newInputs[index]={data:text};
    if(inputsToSet === 'Activities'){this.setActivitiesTextInputs(newInputs)}
    else if(inputsToSet === 'Skills'){this.setSkillsTextInputs(newInputs)}
    else if(inputsToSet === 'Challenges'){this.setChallengesTextInputs(newInputs)}
    else if(inputsToSet === 'Notes'){this.setNotesTextInputs(newInputs)}  
}
setWeekSelectedValue = (text) =>{this.setState({WeekSelectedValue:text});} 
setDaySelectedValue = (text) =>{this.setState({DaySelectedValue:text});} 


postUserData =  async () => 
    {
        let activitiesList = this.state.ActivitiesInputs;
        let skillsList = this.state.SkillsInputs;
        let challengesList = this.state.ChallengesInputs;
        let notesList = this.state.NotesInputs;
        let week = this.state.WeekSelectedValue;
        let day = this.state.DaySelectedValue;

        let fullName = this.state.UserName;
        let regNum = this.state.UserRegNum;
        let course = this.state.UserCourse;
        let supervisor = this.state.UserSupervisor;
        
        // if (week.length == 0 || day.length == 0 || activitiesList.length == 1 || skillsList.length==1 || challengesList.length==1 || notesList.length ==1)
        if (week.length == 0 || day.length == 0)
        // {Alert.alert("Massage","Week OR Day OR \n Activities OR Skills \n OR Challenges OR Notes \n Are Required")}
        {Alert.alert("Massage","Week OR Day OR \n Activities OR Skills \n Are Required")}
        else
        {
            try
            {
                const postRequest = await axios.post(APIUserPost,
                    {
                        "fullName":fullName,
                        "regNum":regNum,
                        "week":week,
                        "day":day,
                        "course":course,
                        "supervisor":supervisor,
                        "challenges":challengesList,
                        "skills":skillsList,
                        "notes":notesList,
                        "activities":activitiesList
                    }
                )
                
                let result = postRequest.data.status;
                Alert.alert("Massage Status",fullName+"\n\n"+result);
                this.setState({ActivitiesInputs:[{data:''}]});
                this.setState({SkillsInputs:[{data:''}]});
                this.setState({ChallengesInputs:[{data:''}]});
                this.setState({NotesInputs:[{data:''}]});
                this.setState({WeekSelectedValue:''});
                this.setState({DaySelectedValue:''});
                this.props.navigation.navigate('Home');
            }
            catch (error)
                {
                    console.log("===========>>>>>>>>>>"+error)
                    Alert.alert("An Error", error+"\n\nHost Not Found \n Check Your Network Connections\n\n")
                };
        }
    }
    
render() {
    const {ActivitiesInputs,SkillsInputs,ChallengesInputs,NotesInputs,Weeks,Days,DaySelectedValue,WeekSelectedValue} =this.state;
    return (
        <View style={styles.mainView}>
            <View style={{height:20}} ></View>
            <ScrollView showsVerticalScrollIndicator={false}>
                <View style={[styles.recordCard,styles.displayCard]} >
                {Platform.OS === 'android' ?(<> 
                    <View style={styles.pickerSelectionInputView1}>
                        <Picker style={styles.pickerSelectionInputs} dropdownIconColor= {COLORS.primaryColor}
                            selectedValue={WeekSelectedValue}
                            
                            onValueChange={(itemValue) =>this.setWeekSelectedValue(itemValue)}>
                                <Picker.Item label="Select A Week"/> 
                                {Weeks && Weeks.map((item,index) => (
                                <Picker.Item label={item.Week} value={item.Week} key={index} /> 
                                ))}
                        </Picker>
                    </View>
                    <View style={styles.pickerSelectionInputView1}>
                        <Picker style={styles.pickerSelectionInputs} dropdownIconColor= {COLORS.primaryColor}
                            selectedValue={DaySelectedValue}
                            
                            onValueChange={(itemValue) =>this.setDaySelectedValue(itemValue)}>
                                <Picker.Item label="Select A Day"/> 
                                {Days && Days.map((item,index) => (
                                <Picker.Item label={item.Day} value={item.Day} key={index} /> 
                                ))}
                        </Picker>
                    </View>
                    </>):(<>
                    <View>
                        <Picker 
                            itemStyle={{ margin: 15,Color:COLORS.white, borderColor:COLORS.primaryColor,height: 45,borderWidth: 3,width:'90%',borderRadius: 10, }}
                            selectedValue={WeekSelectedValue}
                            
                            onValueChange={(itemValue) =>this.setWeekSelectedValue(itemValue)}>
                                <Picker.Item label="Select A Week"/> 
                                {Weeks && Weeks.map((item,index) => (
                                <Picker.Item label={item.Week} value={item.Week} key={index} /> 
                                ))}
                        </Picker>
                    </View>
                    <View>
                        <Picker 
                            itemStyle={{ margin: 15,Color:COLORS.white, borderColor:COLORS.primaryColor,height: 45,borderWidth: 3,width:'90%',borderRadius: 10, }}
                            selectedValue={DaySelectedValue}
                            
                            onValueChange={(itemValue) =>this.setDaySelectedValue(itemValue)}>
                                <Picker.Item label="Select A Day"/> 
                                {Days && Days.map((item,index) => (
                                <Picker.Item label={item.Day} value={item.Day} key={index} /> 
                                ))}
                        </Picker>
                    </View>
                    </>)}
                </View>
                <View style={{height:20}} ></View>
                <View style={[styles.recordCard,styles.displayCard]} >
                    <Text style={[styles.recordCardTitle,styles.successTexT,styles.primaryText]}>ACTIVITIES DONE</Text>
                    {ActivitiesInputs.map((item,index)=>(
                        <View key={index}>
                            <TextInput style={styles.inputs}  placeholder="Activity ..."placeholderTextColor ={COLORS.secondaryColor} 
                            value={item.text}
                            selectionColor={COLORS.primaryColor} onChangeText={text => this.handleTextInputChange(text,index,this.state.ActivitiesInputs,'Activities')}
                            />
                        </View>
                    ))}
                    <View style={{flexDirection:'row',marginLeft:30,marginBottom:20}}>
                        <TouchableOpacity onPress={()=>this.handleAdd(this.state.ActivitiesInputs,'Activities')}>
                            <View style={[styles.recordButtons, styles.recordAddButton]}>
                                <View style={{flexDirection:'row'}}>
                                    <View >
                                        <FontAwesome name="plus" size={24} color={COLORS.whiteColor} style={styles.recordButtonsIcon} />
                                    </View>
                                
                                    <View>
                                        <Text style={[styles.whiteTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]} > Add  </Text>
                                    </View>
                                </View>
                            </View>
                        </TouchableOpacity>
                        <View style={{width:20}} ></View>
                        <TouchableOpacity onPress={()=>this.handleDelete(this.state.ActivitiesInputs,'Activities')}>
                            <View style={[styles.recordButtons, styles.recordDeleteButton]}>
                                <View style={{flexDirection:'row'}}>
                                    <View >
                                        <MaterialIcons name="delete" size={24} style={styles.recordButtonsIcon} color={COLORS.whiteColor} />
                                    </View>
                                
                                    <View>
                                        <Text style={[styles.whiteTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]} > Delete  </Text>
                                    </View>
                                </View>
                            </View>
                        </TouchableOpacity>
                    </View>
                </View>
                <View style={{height:15}} ></View>

                <View style={[styles.recordCard,styles.displayCard]} >
                    <Text style={[styles.recordCardTitle,styles.successTexT,styles.primaryText]}>SKILLS ATTAINED</Text>
                    {SkillsInputs.map((item,index)=>(
                        <View key={index}>
                            <TextInput style={styles.inputs}  placeholder="Skills ..."placeholderTextColor ={COLORS.secondaryColor} 
                            value={item.text}
                            selectionColor={COLORS.primaryColor} onChangeText={text => this.handleTextInputChange(text,index,this.state.SkillsInputs,'Skills')}
                            />
                        </View>
                    ))}
                    <View style={{flexDirection:'row',marginLeft:30,marginBottom:20}}>
                        <TouchableOpacity onPress={()=>this.handleAdd(this.state.SkillsInputs,'Skills')}>
                            <View style={[styles.recordButtons, styles.recordAddButton]}>
                                <View style={{flexDirection:'row'}}>
                                    <View >
                                        <FontAwesome name="plus" size={24} color={COLORS.whiteColor} style={styles.recordButtonsIcon} />
                                    </View>
                                
                                    <View>
                                        <Text style={[styles.whiteTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]} > Add  </Text>
                                    </View>
                                </View>
                            </View>
                        </TouchableOpacity>
                        <View style={{width:20}} ></View>
                        <TouchableOpacity onPress={()=>this.handleDelete(this.state.SkillsInputs,'Skills')}>
                            <View style={[styles.recordButtons, styles.recordDeleteButton]}>
                                <View style={{flexDirection:'row'}}>
                                    <View >
                                        <MaterialIcons name="delete" size={24} style={styles.recordButtonsIcon} color={COLORS.whiteColor} />
                                    </View>
                                
                                    <View>
                                        <Text style={[styles.whiteTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]} > Delete  </Text>
                                    </View>
                                </View>
                            </View>
                        </TouchableOpacity>
                    </View>
                    </View>


                    <View style={{height:15}} ></View>
                    <View style={[styles.recordCard,styles.displayCard]} >
                        <Text style={[styles.recordCardTitle,styles.successTexT,styles.primaryText]}>CHALLENGES DONE</Text>
                        {ChallengesInputs.map((item,index)=>(
                            <View key={index}>
                                <TextInput style={styles.inputs}  placeholder="Challenges ..."placeholderTextColor ={COLORS.secondaryColor} 
                                value={item.text}
                                selectionColor={COLORS.primaryColor} onChangeText={text => this.handleTextInputChange(text,index,this.state.ChallengesInputs,'Challenges')}
                                />
                            </View>
                        ))}
                        <View style={{flexDirection:'row',marginLeft:30,marginBottom:20}}>
                            <TouchableOpacity onPress={()=>this.handleAdd(this.state.ChallengesInputs,'Challenges')}>
                                <View style={[styles.recordButtons, styles.recordAddButton]}>
                                    <View style={{flexDirection:'row'}}>
                                        <View >
                                            <FontAwesome name="plus" size={24} color={COLORS.whiteColor} style={styles.recordButtonsIcon} />
                                        </View>
                                    
                                        <View>
                                            <Text style={[styles.whiteTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]} > Add  </Text>
                                        </View>
                                    </View>
                                </View>
                            </TouchableOpacity>
                            <View style={{width:20}} ></View>
                            <TouchableOpacity onPress={()=>this.handleDelete(this.state.ChallengesInputs,'Challenges')}>
                                <View style={[styles.recordButtons, styles.recordDeleteButton]}>
                                    <View style={{flexDirection:'row'}}>
                                        <View >
                                            <MaterialIcons name="delete" size={24} style={styles.recordButtonsIcon} color={COLORS.whiteColor} />
                                        </View>
                                    
                                        <View>
                                            <Text style={[styles.whiteTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]} > Delete  </Text>
                                        </View>
                                    </View>
                                </View>
                            </TouchableOpacity>
                    </View>
                    </View>
                    <View style={{height:15}} ></View>
                    <View style={[styles.recordCard,styles.displayCard]} >
                        <Text style={[styles.recordCardTitle,styles.successTexT,styles.primaryText]}>NOTES DONE</Text>
                        {NotesInputs.map((item,index)=>(
                            <View key={index}>
                                <TextInput style={styles.inputs}  placeholder="Notes ..."placeholderTextColor ={COLORS.secondaryColor} 
                                value={item.text}
                                selectionColor={COLORS.primaryColor} onChangeText={text => this.handleTextInputChange(text,index,this.state.NotesInputs,'Notes')}
                                />
                            </View>
                        ))}
                        <View style={{flexDirection:'row',marginLeft:30,marginBottom:20}}>
                            <TouchableOpacity onPress={()=>this.handleAdd(this.state.NotesInputs,'Notes')}>
                                <View style={[styles.recordButtons, styles.recordAddButton]}>
                                    <View style={{flexDirection:'row'}}>
                                        <View >
                                            <FontAwesome name="plus" size={24} color={COLORS.whiteColor} style={styles.recordButtonsIcon} />
                                        </View>
                                    
                                        <View>
                                            <Text style={[styles.whiteTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]} > Add  </Text>
                                        </View>
                                    </View>
                                </View>
                            </TouchableOpacity>
                            <View style={{width:20}} ></View>
                            <TouchableOpacity onPress={()=>this.handleDelete(this.state.NotesInputs,'Notes')}>
                                <View style={[styles.recordButtons, styles.recordDeleteButton]}>
                                    <View style={{flexDirection:'row'}}>
                                        <View >
                                            <MaterialIcons name="delete" size={24} style={styles.recordButtonsIcon} color={COLORS.whiteColor} />
                                        </View>
                                    
                                        <View>
                                            <Text style={[styles.whiteTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]} > Delete  </Text>
                                        </View>
                                    </View>
                                </View>
                            </TouchableOpacity>
                    </View>






                </View>
                <View style={{height:20}} ></View>
                <TouchableOpacity onPress={()=>this.postUserData()}>
                    <View style={[styles.buttonsStyle, styles.nextButton]}>
                        <View style={{flexDirection:'row'}}>
                            <View>
                                <Text style={[styles.whiteTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]} > NEXT  </Text>
                            </View>
                            <View >
                                <Entypo name="arrow-with-circle-right" size={24} color={COLORS.whiteColor} style={styles.recordButtonsIcon} />
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
