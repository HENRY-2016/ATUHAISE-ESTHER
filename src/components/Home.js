

import React from 'react';
import { Text,TouchableOpacity,ScrollView, View} from 'react-native';
import axios from "axios";
import AsyncStorage from '@react-native-async-storage/async-storage';
import { APIWeek1Log,APIWeek2Log,APIWeek3Log,APIWeek4Log,APIWeek5Log,APIWeek6Log } from '../utilities/APIs';
import styles from "../utilities/stylesheet";
import { COLORS } from '../utilities/colors';
import { FONTSIZE } from '../utilities/fonts';
import { convertToCapitalLetters } from '../utilities/Functions';
export default class Home extends React.Component {
    
constructor(props){
    
    super(props);
    this.state = {

            WeeksButtons: 
            [
                { btnId: '1', Action:'Week1', btnName: 'WEEK 1',btnNameTextColor:COLORS.whiteColor, btnBgColor:COLORS.secondaryColor},
                { btnId: '2', Action:'Week2', btnName: 'WEEK 2',btnNameTextColor:COLORS.whiteColor, btnBgColor:COLORS.secondaryColor},
                { btnId: '3', Action:'Week3', btnName: 'WEEK 3',btnNameTextColor:COLORS.whiteColor, btnBgColor:COLORS.secondaryColor},
                { btnId: '4', Action:'Week4', btnName: 'WEEK 4',btnNameTextColor:COLORS.whiteColor, btnBgColor:COLORS.secondaryColor},
                { btnId: '5', Action:'Week5', btnName: 'WEEK 5',btnNameTextColor:COLORS.whiteColor, btnBgColor:COLORS.secondaryColor},
                { btnId: '6', Action:'Week6', btnName: 'WEEK 6',btnNameTextColor:COLORS.whiteColor, btnBgColor:COLORS.secondaryColor},
            ],
            WeekData:[],
            Week1Data:[],
            Week2Data:[],
            Week3Data:[],
            Week4Data:[],
            Week5Data:[],
            Week6Data:[],

            UserName:'',
            UserRegNum:'',
            UserDob:'',
            UserCourse:'',
            UserSupervisor:'',

        
    }    
}
UNSAFE_componentWillMount () {
    this.setInitialActiveColor();
    this.initializeUserAccount();
}

componentDidMount(){this.loadAppData();}
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
                console.log(this.state.UserRegNum)
            }
            else {this.setState({DoNotShowLogInScreen:true})}
            })
        }catch (error) { console.log(error)}
    }
loadAppData = ()=>
    {
        axios.get(APIWeek1Log+this.props.route.params.StudentRegNumber)
        .then(res => {
            let results =JSON.stringify(res.data);
            let jsonResults =JSON.parse(results); 
            this.setState({WeekData:jsonResults})
            this.setState({Week1Data:jsonResults});
            })
        .catch(err=>{console.log(err);})

        axios.get(APIWeek2Log+this.props.route.params.StudentRegNumber)
        .then(res => {
            let results =JSON.stringify(res.data);
            let jsonResults =JSON.parse(results); 
            this.setState({Week2Data:jsonResults});
            })
        .catch(err=>{console.log(err);})

        axios.get(APIWeek3Log+this.props.route.params.StudentRegNumber)
        .then(res => {
            let results =JSON.stringify(res.data);
            let jsonResults =JSON.parse(results); 
            this.setState({Week3Data:jsonResults});
            })
        .catch(err=>{console.log(err);})
        axios.get(APIWeek4Log+this.props.route.params.StudentRegNumber)
        .then(res => {
            let results =JSON.stringify(res.data);
            let jsonResults =JSON.parse(results); 
            this.setState({Week4Data:jsonResults});
            })
        .catch(err=>{console.log(err);})
        axios.get(APIWeek5Log+this.props.route.params.StudentRegNumber)
        .then(res => {
            let results =JSON.stringify(res.data);
            let jsonResults =JSON.parse(results); 
            this.setState({Week5Data:jsonResults});
            })
        .catch(err=>{console.log(err);})
        axios.get(APIWeek6Log+this.props.route.params.StudentRegNumber)
        .then(res => {
            let results =JSON.stringify(res.data);
            let jsonResults =JSON.parse(results); 
            this.setState({Week6Data:jsonResults});
            })
        .catch(err=>{console.log(err);})


    
    }
    
setInitialActiveColor = () => 
{
    let WeeksButtons = JSON.parse(JSON.stringify(this.state.WeeksButtons));
    // For buttons 
    for (let x = 0; x < this.state.WeeksButtons.length; x++) 
        {
            if (this.state.WeeksButtons[x].btnId == 1) 
            {
                WeeksButtons[x].btnBgColor = COLORS.successColor;
                WeeksButtons[x].btnNameTextColor = COLORS.whiteColor;
                this.setState({WeeksButtons: WeeksButtons});
            }
        }

}
changeBackgroundColor = (item) => 
{
    let WeeksButtons = JSON.parse(JSON.stringify(this.state.WeeksButtons));

    for (let x = 0; x < this.state.WeeksButtons.length; x++) 
    {
        if (this.state.WeeksButtons[x].btnId == item.btnId) 
        {
            WeeksButtons[x].btnBgColor = COLORS.successColor;
            WeeksButtons[x].btnNameTextColor = COLORS.whiteColor;
            this.setState({WeeksButtons: WeeksButtons,});
            // Display Screens Basing on Actions And Update App Content Data
            let Action = WeeksButtons[x].Action
            if (Action==="Week1"){this.setState({WeekData:this.state.Week1Data})}
            else if (Action==="Week2"){this.setState({WeekData:this.state.Week2Data})}
            else if (Action==="Week3"){this.setState({WeekData:this.state.Week3Data})}
            else if (Action==="Week4"){this.setState({WeekData:this.state.Week4Data})}
            else if (Action==="Week5"){this.setState({WeekData:this.state.Week5Data})}
            else if (Action==="Week6"){this.setState({WeekData:this.state.Week6Data})}

        } 
        else 
        {
            WeeksButtons[x].btnBgColor = COLORS.secondaryColor;
            WeeksButtons[x].btnNameTextColor = COLORS.whiteColor;
            this.setState({WeeksButtons: WeeksButtons,});
        }
    }
};

displayNestedData = (Data) => {
    return(JSON.parse(Data).map((item, itemIndex) => (
        <View key={itemIndex}>
            <Text style={[styles.blackTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]}> ⬤ {item.data}</Text>
        </View>
    )))
} 
displayCommentsData = (Data) => {
    return(JSON.parse(Data).map((item, itemIndex) => (
        <View key={itemIndex}>
            <Text style={[styles.blackTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]}> ⬤ {item}</Text>
        </View>
    )))
} 
render() {
    const {WeeksButtons,WeekData} =this.state;
    return (
        <View style={styles.mainView}>
            <View style={{height:20}} ></View>
            <ScrollView showsVerticalScrollIndicator={false}>
                <View style={{flexDirection:'row',marginLeft:10,marginRight:10}}>
                    <ScrollView horizontal={true} showsHorizontalScrollIndicator={false} > 
                        {WeeksButtons.map((item, index) => (
                            <View key={index} >
                                <TouchableOpacity
                                    style={{
                                        borderRadius:10, height:40,width:85,
                                        marginLeft:8,marginRight:8,
                                        backgroundColor:item.btnBgColor,
                                    }}
                                    onPress={() => this.changeBackgroundColor(item)}>
                                    <Text style={{color:item.btnNameTextColor,
                                        marginLeft:10,marginRight:10,marginTop:10,
                                        fontSize:FONTSIZE.fontSizeOne
                                    }}>{item.btnName}</Text>
                                </TouchableOpacity>
                            </View>
                        ))}
                        
                    </ScrollView>
                </View>
                
                <View style={{height:20}} ></View>
                {WeekData && WeekData.map((item,index)=>(
                    <View key={index}>
                            <View style={[styles.buttonsStyle, styles.dayButton]}>
                                <View>
                                    <Text style={[styles.whiteTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]} > {item.day}  </Text>
                                </View>
                            </View>

                            <View style={[styles.recordCard,styles.displayCard]}>
                                <Text style={[styles.recordCardTitle,styles.successTexT,styles.primaryText]}>STUDENTS DETAILS</Text>
                                <Text style={[styles.blackTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]}>Name : {convertToCapitalLetters(item.fullName)}</Text>
                                <Text style={[styles.blackTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]}>Course : {item.course}</Text>
                                <Text style={[styles.blackTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]}>Reg No : {item.regNum}</Text>

                                <Text style={[styles.recordCardTitle,styles.successTexT,styles.primaryText]}>ACTIVITIES</Text>
                                    {this.displayNestedData(item.activities)}
                                <Text style={[styles.recordCardTitle,styles.successTexT,styles.primaryText]}>SKILLS ATTAINED </Text>
                                    {this.displayNestedData(item.skills)}
                                <Text style={[styles.recordCardTitle,styles.successTexT,styles.primaryText]}>CHALLENGES</Text>  
                                    {this.displayNestedData(item.challenges)}
                                <Text style={[styles.recordCardTitle,styles.successTexT,styles.primaryText]}>NOTES</Text>
                                    {this.displayNestedData(item.notes)}
                                <View style={{height:20}} ></View>
                                <Text style={[styles.recordCardTitle,styles.successTexT,styles.primaryText]}>SUPERVISOR COMMENTS</Text>
                                <Text style={[styles.blackTexT,styles.primaryText,styles.boldTexT,styles.recordButtonsText]}>Name :{"\n"} {convertToCapitalLetters(item.supervisor)}</Text>
                                    {this.displayCommentsData(item.comments)}
                                <View style={{height:20}} ></View>
                            </View>
                            <View style={{height:15}} ></View>
                    </View>
                ))}
                
                <View style={{height:20}} ></View>
            </ScrollView>
        </View>
    );
}
}
