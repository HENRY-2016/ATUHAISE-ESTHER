import { StyleSheet} from 'react-native';
import { COLORS } from "./colors";
import { FONTSIZE } from './fonts';

export default StyleSheet.create(
{
    mainView: {flex:1,backgroundColor:COLORS.appBodyColor,},



    redTexT:{color:COLORS.dangerColor},
    successTexT:{color:COLORS.successColor},
    whiteTexT:{color:COLORS.whiteColor},
    blackTexT:{color:COLORS.blackColor,},
    boldTexT:{fontWeight:'bold'},

    primaryText:{fontSize:FONTSIZE.fontSizeOne},
    

    recordCardTitle:{ marginTop:20,marginLeft:20,fontWeight:'bold'},


    displayCard:
    {
        backgroundColor:COLORS.whiteColor,
        borderRadius:10,
        marginRight:8,marginLeft:8,
        borderColor:COLORS.primaryColor,
        borderWidth:2,
    },

    // smallCard:{height:70,width:'95%',marginLeft:10,marginRight:10},
    recordCard:{width:'95%',marginLeft:10,marginRight:10},
    // Buttons 
    buttonsStyle:
	{
		flexDirection: 'row',
		marginBottom:10,marginLeft:5,
        borderRadius:15,
		alignItems: 'center', justifyContent: 'center',
	},
    recordButtons:{borderRadius:10, height:40,},
    recordButtonsText:{marginLeft:10,marginRight:10,marginTop:10},
    recordButtonsIcon:{marginTop:8, marginLeft:10,marginRight:10},
    recordAddButton:{backgroundColor:COLORS.successColor},
    recordDeleteButton:{backgroundColor:COLORS.dangerColor},
    nextButton:{backgroundColor:COLORS.secondaryColor,borderRadius:10, height:45,width:'95%',marginLeft:10},
    logoutButton:{backgroundColor:COLORS.dangerColor,borderRadius:10, height:45,width:'95%',marginLeft:10},
    // weeksButton:{borderRadius:10, height:40,width:85,},
    // activeWeekButton:{backgroundColor:COLORS.successColor},
    // inActiveWeekButton:{backgroundColor:COLORS.secondaryColor},
    // daysButton:{borderRadius:50, height:30,width:35,},
    // activeDayButton:{backgroundColor:COLORS.successColor},
    // inActiveDayButton:{backgroundColor:COLORS.dangerColor},
    dayButton:{backgroundColor:COLORS.dangerColor,borderRadius:10, height:45,width:'95%',marginLeft:10},




    inputs: {
		margin: 15,
		height: 40,width:'90%',
		color:COLORS.darkColor,
		fontSize:18,
		textAlign:'center',
		borderWidth: 3,borderRadius: 10,
		borderColor:COLORS.secondaryColor,
	},

    userIcon:{width:130,height: 130,},





//  Picker
pickerSelectionInputView1: 
{
	margin: 15, height: 40,
	color:COLORS.black,
	fontSize:19,width:'90%',
	textAlign:'center',
	borderWidth: 3,borderRadius: 10,
	borderColor:COLORS.secondaryColor,

},
pickerSelectionInputs:
{
	marginTop: -10,marginLeft:10,
	height: 40,color:COLORS.primaryColor,
	fontSize:20,width:'90%',
},




});