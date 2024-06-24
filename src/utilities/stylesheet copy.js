import { StyleSheet} from 'react-native';
import { COLORS } from "./colors";
import { FONTSIZE } from './fonts';

export default StyleSheet.create(
{
    mainView: {flex:1,backgroundColor:COLORS.appBodyColor,},
    mainView2: {flex:1,backgroundColor:COLORS.whiteColor,},


    redTexT:{color:COLORS.redColor},
    brownTexT:{color:COLORS.secondaryColor},
    whiteTexT:{color:COLORS.whiteColor},
    blackTexT:{color:COLORS.darkColor,},
    greenTexT:{color:COLORS.primaryColor,},
    boldTexT:{fontWeight:'bold'},


    // Buttons 
    buttonsStyle:
	{
		flexDirection: 'row',
		marginBottom:10,marginLeft:5,
        borderRadius:15,
		alignItems: 'center', justifyContent: 'center',
	},
    smallBtnView:
	{
        marginTop:'5%', 
		height:45,width:'90%', 
		backgroundColor:COLORS.secondaryColor,
	},
    mediumBtnView:
	{
        // marginTop:'5%', 
		height:45,width:'90%', 
		backgroundColor:COLORS.brownColor,
	},
    mediumBtnView2:
	{
        // marginTop:'5%', 
		height:45,width:'60%', 
		backgroundColor:COLORS.brownColor,
	},
    contactUsBtnView:
	{
        // marginTop:'5%', 
        // 
		height:45,width:'50%', 
		backgroundColor:COLORS.brownColor,
	},
    deleteAccBtnView:
	{
        // marginTop:'5%', 
        // 
		height:45,width:'90%', 
		backgroundColor:COLORS.redColor,
	},
    // Disease
    diseaseCardView:
    {
        backgroundColor:COLORS.whiteColor,
		flex: 1, 
		borderRadius:10, borderColor:COLORS.primaryColor,
        borderWidth:2,
		marginLeft:10,marginRight:10,marginBottom:8, 

	},
    // Products 
    productsCardView:
    {
        backgroundColor:COLORS.whiteColor,
		flex: 1, 
		borderRadius:20, borderColor:COLORS.primaryColor,
        borderWidth:2,
		marginLeft:10,marginRight:10,marginBottom:20, 

	},
    productImage:
    {
        marginTop:7,
        height: 160,width: 150,  borderRadius:15,
    },
    cartProductImage:
    {
        marginTop:7,
        height: 120,width: 100,  borderRadius:15,
    },
    productTextView:
	{
		marginLeft:5, marginTop:'5%',
		alignSelf: 'center', width:'95%',
	},
	productText:
	{
		fontSize:FONTSIZE.fontSizeSmall,
		color:COLORS.darkColor,
        paddingLeft:10,	
	},
    productText2:
	{
		fontSize:FONTSIZE.fontSizeSmall,
		color:COLORS.darkColor,
        paddingLeft:10,	
        fontWeight:'bold',
	},
    diseaseTitleText:
	{
		fontSize:FONTSIZE.fontSizeOne,
		color:COLORS.primaryColor,
        paddingLeft:10,	
        fontWeight:'bold',
	},
    diseaseTitleText2:
	{
		fontSize:FONTSIZE.fontSizeOne,
		color:COLORS.primaryColor,
        paddingLeft:10,	
        fontWeight:'bold',
        paddingTop:8
	},

    oldPriceText:
    {
        textDecorationLine: 'line-through',
        fontSize:16, color:COLORS.redColor,	
        paddingLeft:10,
    },
    

    productsLikesIcon:{marginLeft:8, marginTop:6,},
    // productsPlusIcon:{padding:5},
    productsLikesTopView:
    {
        flex:1,
        flexDirection:'row',
    },
    productsLikesView:
    {

    },
    productsLikesIconView:
    {
        backgroundColor:COLORS.secondaryColor,
        width:40,height:40,
        borderRadius:50,
        marginLeft:5,marginTop:5,
        
    },
    productTitleView:{height:50,},
    productTitleText:{fontSize:FONTSIZE.fontSizeOne,},
    centerElement: 
	{
		justifyContent: 'center', 
		alignItems: 'center'
	},

    addToBasketText:
	{
	
		fontSize:FONTSIZE.fontSizeSmall, 
        fontWeight:'bold',
		marginTop:-5, marginLeft:0,
		color:COLORS.whiteColor,
	},
    mediumBtnTextView:
    {
        // marginLeft:-10,
    },
    mediumBtnText:
	{
	
		fontSize:FONTSIZE.fontSizeOne, 
		marginTop:-5, marginLeft:-10,
		color:COLORS.whiteColor,
	},
    contactUsBtnText:
	{
	
		fontSize:FONTSIZE.fontSizeTwo, 
		// marginTop:-5, 
        paddingRight:20,
		color:COLORS.whiteColor,
	},
    
    // mediumIconView:
    // {
    //     backgroundColor:COLORS.primaryColor,
    //     width:40,height:40,
    //     borderRadius:50,
    // },
    productDetailsImageView:
    {
        backgroundColor:COLORS.primaryColor,
        // height:'60%',
        width:'100%',
        borderBottomLeftRadius:50,
        borderBottomRightRadius:50,
        alignItems:'center',
        // top:'0',
    },
    detailsImage:
    {
        // marginTop:8,
        height: 350,
        width: 350, 
        resizeMode: 'contain',
        // flex: 1,
        // aspectRatio: 1,
    },
    productDetailsTextView:
    {
        marginTop:20,
    },
    addToBasketDetailsBtnView:
    {
        width:'50%',
        marginLeft:'20%', marginTop:30,
    },

    bottomView: {
        width: '100%',height: 86,
        flexDirection:'column',
        backgroundColor:COLORS.primaryColor,
        justifyContent: 'center',
        alignItems: 'center',
        position: 'absolute', //Here is the trick
        bottom: 0, //Here is the trick
    },
    cartCheckOutBottomView:
	{
		borderTopWidth: 2, borderColor: '#f6f6f6', paddingVertical: 5,
		backgroundColor:COLORS.primaryColor,
        
	},
	
    innerBottomView: {
        height:20,width:'100%',
        borderBottomLeftRadius:40,
        borderBottomRightRadius:40,
        marginTop:-70,
        marginBottom:10,
    },
    innerBottomView1: {backgroundColor:COLORS.appBodyColor,},
    innerBottomView2: {backgroundColor:COLORS.whiteColor},

    //  My Orders 
    myOrderDetailsText:
	{
	
		fontSize:FONTSIZE.fontSizeTwo, 
		// marginTop:-5, 
        // padding:20,
		color:COLORS.brownColor,
        textDecorationLine:'underline',
        fontWeight:'bold',
	},
    myOrderDetailsIcon:{padding:15},
    myOrderDateView:{paddingLeft:35,marginTop:10,},
    myOrderDetailsTextView:{paddingLeft:30,marginTop:10,},

// App Update
updateTextLabel:{
    color:COLORS.darkColor,
    fontWeight:'bold',
    fontSize:FONTSIZE.fontSizeTwo,
},
updateBtnView:{
    marginTop:'5%', 
    height:45,width:150, 
    backgroundColor:COLORS.secondaryColor,
},
    // About Us
    contactsCards:
    {
        backgroundColor:COLORS.whiteColor,
        borderRadius:10,
        marginRight:8,marginLeft:8,
        height:95,width:95,
        borderColor:COLORS.primaryColor,
        borderWidth:2,
    },
    displayCard:
    {
        backgroundColor:COLORS.whiteColor,
        borderRadius:10,
        marginRight:8,marginLeft:8,
        borderColor:COLORS.primaryColor,
        borderWidth:2,
    },
    productsTitleCard:
    {
        backgroundColor:COLORS.brownColor,
        borderRadius:10,
        height:40,
        marginRight:8,marginLeft:8,
        borderColor:COLORS.primaryColor,
        borderWidth:2,
        alignItems:'center', marginTop:0
    },
    deleteAccountCard:
    {
        backgroundColor:COLORS.whiteColor,
        borderRadius:10,
        marginRight:8,marginLeft:8,
        borderColor:COLORS.redColor,
        borderWidth:2,
    },
    borderLessDisplayCard:
    {
        backgroundColor:COLORS.whiteColor,
        borderRadius:10,
        marginRight:8,marginLeft:8,
    },
    fullScreenDisplayCard:
    {
        flex:1,
        backgroundColor:COLORS.whiteColor,
        borderColor:COLORS.primaryColor,
    },

    mediumCard:{height:110},
    accountCard:{height:155},
    deleteAccCard:{height:237},
    programsCard:{},
    checkOutDetailsCard:{height:385},
    checkOutDetailsCard2:{height:310},


    cardsContainerView:
    {
        flexDirection:'row',
    },
    imageView:
    {
        // width:80,
        // height:80,
        // backgroundColor:COLORS.brownColor,
    },
    textView:
    {
        marginTop:25,marginLeft:'10%',
        // justifyContent:'center',
        // backgroundColor:COLORS.secondaryColor,

    },
    ourTeamTextView:{marginTop:25,marginLeft:15  },
    programsTextView:{
        flexDirection:'row',
        marginTop:10,marginLeft:15, 
        // padding:10, 
    },
    floatRightEndView:
    {
        // backgroundColor:COLORS.secondaryColor,
        // alignItems: 'flex-end',
        // flexDirection: 'row', justifyContent: 'flex-end',
        alignItems: 'flex-end',
        width:30
        
    },

smallCard:{height:70,width:'95%',marginLeft:10,marginRight:10},
smallCardContainer:{height:50,borderRadius:10,},
smallCardRowView:{flexDirection:'row',},
    
    arrowView:
    {
        // backgroundColor:COLORS.brownColor,
        marginTop:25,marginLeft:'10%',

        // width:40,
        // justifyContent:'flex-end',
    },
    ImageIcon:
    {
        width:'100%',height: 148,
        marginTop:15,marginLeft:15,
        marginBottom:15,	borderRadius:15,
    },
    aboutIcon:
    {
        width:40,height: 40,
        marginTop:15,marginLeft:15,
    },
    contactsIcon:
    {
        width:50,height: 50,
        marginTop:15,marginLeft:15,
    },
    // circleCard:
    // {
    //     backgroundColor:COLORS.whiteColor,
    //     borderRadius:70,borderWidth:2,
    //     borderColor:COLORS.primaryColor,
    // },
    // circleImage:
    // {
    //     width:120,height: 120,
    //     marginTop:8,marginLeft:7,
    // },
    // circleImageView:
    // {

    //     width:150,height: 150,
    //     marginT:30,marginLeft:'30%',
    // },
    ourTeamImage:
    {
        width:130,height: 130,
        marginTop:8,marginLeft:15,
    },
    ourTemNameView:{width:200,},
    ourTeamTextName:{fontSize:FONTSIZE.fontSizeOne,color:COLORS.darkColor,},
    ourTeamTextTime:{fontSize:FONTSIZE.fontSizeOne,color:COLORS.primaryColor, fontWeight:'bold'},
    ourTeamTextTitle:{fontSize:18,color:COLORS.primaryColor},

    aboutText:{fontSize:FONTSIZE.fontSizeOne,},
    contactsText:{fontSize:FONTSIZE.contactsFontSize,marginTop:-20,},
    appointmentText:{fontSize:FONTSIZE.fontSizeTwo,fontWeight:'bold'},
    appointmentText2:{fontSize:FONTSIZE.fontSizeTwo,color:COLORS.whiteColor},
    programTextName:{fontSize:FONTSIZE.fontSizeLarge,marginTop:8,marginLeft:15, fontWeight:'bold',color:COLORS.secondaryColor,},

    contactsCardView:
    {
        marginTop:10,
        paddingLeft:10,
        paddingRight:10,
        alignItems:'center'
    },
    contactsCardRow:{flexDirection:'row'},
    contactBottomView:
    {
        flex:1,
        backgroundColor:COLORS.whiteColor,
        // width:'100%',
        // height:100,
        borderTopLeftRadius:50,
        borderTopRightRadius:50,
        // alignItems:'center',

    },
    healthTipDisplayCard:
    {
        flex:1,
        backgroundColor:COLORS.whiteColor,
        // borderColor:COLORS.primaryColor,
        // borderWidth:2,
    },

    // ============= My Basket ==========
    myBasketCardView:
	{

		flexDirection: 'row',
		backgroundColor:COLORS.whiteColor,
		marginLeft:10,marginRight:10, marginTop: 10,
		borderTopEndRadius:15,borderTopLeftRadius:15,
        height:155,
	},
    myBasketCardImageView:
	{
		flexDirection: 'column', 
		flexGrow: 1,
		width:0,height:80,
		marginBottom:10, marginLeft:10,
        // backgroundColor:COLORS.secondaryColor
	},
    cartQtyText:
    {
        paddingLeft:10, paddingRight:10,marginTop:8, 
        fontSize:FONTSIZE.fontSizeOne,fontWeight:'bold'
    },
    productImage:
	{
		marginLeft:-14,marginTop:10,marginBottom:10,
		height: 158,width: 158,  borderRadius:15,
        resizeMode: 'contain',
        aspectRatio:1,
	},
    programIcons:
	{
		marginLeft:-14,marginTop:10,
		height: 158,width: 158,  borderRadius:15,
        resizeMode: 'contain',
        aspectRatio:1,
	},
    ceoImage:
	{
		marginLeft:-14,marginTop:10,
		height: 210,width: 210,  
        borderRadius:25,
        resizeMode: 'contain',
        aspectRatio:1,
	},
    cartLabelLeftView:
	{
		flexDirection: 'column', 
		flexGrow: 1,
		alignSelf: 'center',
		width:110,height:190,
        paddingTop:25,marginLeft:10,
	},
    cartActionsRightView:
	{
		flexDirection: 'column', 
        paddingRight:10,
	},
    cartPlusMinusIconView:
    {
        flexDirection:'row',
        padding:10,
    },
    cartDeleteView:
    {
        flexDirection:'row',
        backgroundColor:COLORS.lightGreenColor,
        borderColor:COLORS.redColor,
        borderWidth:2,borderRadius:10,
        marginRight:4,
    },
    cartDeleteText:{padding:4, fontSize:FONTSIZE.fontSizeSmall,color:COLORS.redColor,fontWeight:'bold'},
    cartBottomTextView:{
        flexDirection:'row',
    },
    cartBottomText:{
        color:COLORS.whiteColor,
        fontSize:FONTSIZE.fontSizeOne,
        fontWeight:'bold',
    },

    offersLabels:
	{
		paddingLeft:30,
		fontSize:FONTSIZE.fontSizeOne,
		color:COLORS.darkColor,
	},
    
    offersLabels2:
	{
		paddingLeft:30,
		fontSize:FONTSIZE.fontSizeOne,
		color:COLORS.videoCardsColor,
        fontWeight:'bold',
	},
    productsLabels:
	{
		paddingLeft:30,
		fontSize:FONTSIZE.fontSizeSmall,
		color:COLORS.darkColor,
        fontWeight:'bold'
	},
mobileMoneyLabel:
{
    paddingLeft:45,
    fontSize:FONTSIZE.fontSizeOne,
    color:COLORS.secondaryColor,
    fontWeight:'bold',
},
mobileMoneyLabel2:
{
    paddingLeft:45,
    fontSize:FONTSIZE.fontSizeOne,
    color:COLORS.redColor,
    fontWeight:'bold',
},


    outLineTitle:{paddingLeft:20,fontSize:FONTSIZE.fontSizeOne,color:COLORS.primaryColor,fontWeight:'bold'},
    outLineDescription:{paddingLeft:20, fontSize:18,color:COLORS.darkColor},
    outLineDescription2:{paddingLeft:20, fontSize:FONTSIZE.fontSizeOne,color:COLORS.darkColor,fontWeight:'bold'},
    notifications:{paddingLeft:20, fontSize:FONTSIZE.fontSizeTwo},
    notificationSeparator:
    {
        backgroundColor:COLORS.primaryColor,
        height:8,
        marginLeft:10,marginRight:10,
        borderRadius:40,
    },



    inputs: {
		margin: 15,
		height: 40,width:'90%',
		color:COLORS.darkColor,
		fontSize:18,
		textAlign:'center',
		borderWidth: 3,borderRadius: 10,
		borderColor:COLORS.secondaryColor,
	},

    messageInputs: {
		margin: 15,
		height: 80,width:'90%',
		color:COLORS.darkColor,
		fontSize:18,
		textAlign:'center',
		borderWidth: 3,borderRadius: 10,
		borderColor:COLORS.secondaryColor,
	},
    healthTipImageView:
    {
    marginTop:0
    },
    

    healthTipImage:
    {
        resizeMode: 'contain',
        flex: 1,
        aspectRatio: 1,
        borderWidth: 5,borderRadius: 10,
		borderColor:COLORS.primaryColor, 
    },


    // payments 
paymentMainView: {alignItems:'center'},
paymentMMImage:{width:200,height:100,},
paymentImage:
{
    marginLeft:'20%',marginRight:'20%',
    width:100,height:100,
},
paymentText:
{
    marginTop:30,fontSize:FONTSIZE.fontSizeLarge,
    color:COLORS.secondaryColor,
    fontWeight:'bold',
},
// Splash Screen
    mainSplashScreenView: {flex:1,backgroundColor:COLORS.whiteColor},
    splashScreenView:
    {
        marginTop:'35%',
        flexDirection:'column',
        justifyContent: 'center',
        alignContent:'center',
        width:'100%',
    },
    splashScreenImage:
        {
            marginLeft:'20%',marginRight:'20%',
            width:230,height:230,
            resizeMode: 'contain',
            aspectRatio:1,
        },


    splashScreenTextView:
	{
		flexDirection: 'row',
		justifyContent:'center',
		marginLeft:30, marginTop:-20,
	},
	splashScreenText:
	{
		marginTop:30,fontSize:FONTSIZE.fontSizeTwo,
		color:COLORS.primaryColor,
        fontWeight:'bold',
	},
    splashScreenText2:
	{
		marginTop:30,fontSize:FONTSIZE.fontSizeTwo,
		color:COLORS.secondaryColor,
        fontWeight:'bold',
	},
    splashScreenBottomView:
    {
        backgroundColor:COLORS.primaryColor,
        flex:1,
        flexDirection:'column',
        paddingLeft:10,
        borderTopRightRadius:50,
        borderTopLeftRadius:50,
    },
    splashScreenBottomText:
    {
        marginTop:30,fontSize:FONTSIZE.fontSizeLarge,
		color:COLORS.whiteColor,
        fontWeight:'bold',
        paddingLeft:20,
    },
    splashScreenBottomBtnView:
    {
        marginLeft:20,
        marginBottom :30,
        justifyContent: 'center',
        alignItems: 'center',
        position: 'absolute', //Here is the trick
        bottom: 0, //Here is the trick
    },


//  Branches
directionView:
{
    flexDirection:'row'
},
directionIcon:{paddingLeft:20,},
directionText:{paddingLeft:10, marginTop:5, fontSize:FONTSIZE.fontSizeOne,color:COLORS.brownColor, textDecorationLine:'underline',fontWeight:'bold' },





profileUserCard:
{
    borderRadius:10,marginRight:8,marginLeft:8,
    flexDirection:'row',height:125, 
    backgroundColor:COLORS.videoCardsColor
},
profileLRightUserView:{paddingLeft:55, marginTop:20,},

//  Modal 
    centeredView: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
        marginTop: 22,
    },
    modalView: {
        margin: 20,
        backgroundColor:COLORS.whiteColor,
        borderRadius: 20,
        padding: 35,
        alignItems: 'center',
        shadowColor: '#000',
        shadowOffset: {width: 0,height: 2,},
        shadowOpacity: 0.25,
        shadowRadius: 4,
        elevation: 5,
    },
    button: {
        borderRadius: 10,
        padding: 10,
        elevation: 2,
    },
    buttonOpen: {
        backgroundColor:COLORS.secondaryColor,
        margin: 15,
		height: 40,width:'90%',
		color:COLORS.darkColor,
		fontSize:18,
		textAlign:'center',
    },
    buttonClose: {backgroundColor: COLORS.redColor,},
    textStyle: {
        color: 'white',
        fontWeight: 'bold',
        textAlign: 'center',
    },
    modalText: {
        marginBottom: 15,
        textAlign: 'center',
    },
    popUpImage:
	{
		width:300,height:300,
		borderRadius:20,
	},

    webViewContainer: {
        width: '100%',
        height: 500,
        marginTop: 20,
        backgroundColor:COLORS.primaryColor,
    },


// Videos 
videoTipsCardRow:
{
	flexDirection:'column',
	backgroundColor: COLORS.videoCardsColor,
	borderRadius:20,
	width:'95%',
    // height: 168,
	marginLeft:10,marginRight:10,marginTop:2
},

showRoomView:
	{
		width:150,height: 140,
		
	},
videoTipsImage:
{
	width:'100%',height: 148,
	marginTop:15,marginLeft:15,
	marginBottom:15,	borderRadius:15,
},
videoTipsNameView:{width:'80%', alignItems:'center'},

videoTipsActionBtnView:
{
    flexDirection:'row',
	// marginLeft:50, marginTop:10,
	// backgroundColor:COLORS.red,
	// position: 'absolute',right: 0,
},
videoTipsLinkBtn:
{
	fontSize:18, marginTop:0, 
	width:160,
},

videoModalText:
{
    fontSize:FONTSIZE.fontSizeOne,
},
videoTipsBtnText:
{

	fontSize:FONTSIZE.fontSizeOne, 
	marginTop:1, marginLeft:25, 
	color:COLORS.brownColor,
    fontWeight:'bold',
},
videoTipsNameText:
{
	fontSize:FONTSIZE.fontSizeOne, 
	color:COLORS.whiteColor,
    fontWeight:'bold'
},
videoTipsBtnView:
{
    width: 130, height: 40,
    marginRight:10, borderRadius: 20,
    justifyContent: 'center', 
    alignItems: 'center',
    backgroundColor:COLORS.primaryColor
},

youtubeIcon:{marginLeft:15, marginTop:0,},
nextIcon:{marginLeft:90, marginTop:-23,},
nextIcon1:{marginLeft:90, marginTop:-23,},



// Offline 
OfflineMainView:
{
    justifyContent: 'center', 
    alignItems: 'center',
    marginTop:50,
    backgroundColor:COLORS.whiteColor,
},
	OfflineIcon:{width:120,height:120 },
RefreshBtn: 
{
    width: '75%',height: 40, marginTop: 1,
    backgroundColor:COLORS.primaryColor,
    paddingTop: 15,
    borderRadius: 10,marginLeft:5,
},
OfflineLabel:
{
    color:COLORS.redColor,
    fontWeight:'bold',
    fontSize:FONTSIZE.fontSizeLarge
},
RefreshLabel:
{
    marginLeft:80,marginTop:-10, 
    fontSize:20,
    color:COLORS.whiteColor,
    fontWeight:'bold',
    fontSize:FONTSIZE.fontSizeLarge
},











});