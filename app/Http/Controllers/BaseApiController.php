<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentsLogsModel;
use App\Models\StudentsModel;

class BaseApiController extends Controller
{
    function studentLogIn (Request $request)
    {

        $regNum = trim($request->regNum);
        $email = trim($request->email);

        $data = StudentsModel::where('regNum',$regNum)->where('email',$email)->get(['id','fullName','palace','email','course','supervisor','regNum']);
        return $data;
    }

    function studentWeek1Logs (Request $request)
    {
        $regNum = $request->regNum; 
        $data = StudentsLogsModel::where('regNum',$regNum)->where('week','Week-1')->get();
        return $data;
    }
    function studentWeek2Logs (Request $request)
    {
        $regNum = $request->regNum; 
        $data = StudentsLogsModel::where('regNum',$regNum)->where('week','Week-2')->get();
        return $data;
    }
    function studentWeek3Logs (Request $request)
    {
        $regNum = $request->regNum; 
        $data = StudentsLogsModel::where('regNum',$regNum)->where('week','Week-3')->get();
        return $data;
    }
    function studentWeek4Logs (Request $request)
    {
        $regNum = $request->regNum; 
        $data = StudentsLogsModel::where('regNum',$regNum)->where('week','Week-4')->get();
        return $data;
    }
    function studentWeek5Logs (Request $request)
    {
        $regNum = $request->regNum; 
        $data = StudentsLogsModel::where('regNum',$regNum)->where('week','Week-5')->get();
        return $data;
    }
    function studentWeek6Logs (Request $request)
    {
        $regNum = $request->regNum; 
        $data = StudentsLogsModel::where('regNum',$regNum)->where('week','Week-6')->get();
        return $data;
    }

    function saveStudentPosts (Request $request)
    {

        $status = "Pending";
        $newPost = new StudentsLogsModel ();
        $newPost-> fullName = $request-> fullName;
        $newPost-> regNum = $request->regNum;
        $newPost-> course = $request->course;
        $newPost-> week = $request->week;
        $newPost-> day = $request->day;
        $newPost-> status = $status;
        $newPost-> supervisor = $request-> supervisor;

        $activitiesList = $request-> activities;
        $skillsList = $request-> skills;
        $notesList = $request-> notes;
        $challengesList = $request-> challenges;


        $comments = json_encode([]);
        $activitiesJSON = json_encode($activitiesList);
        $skillsJSON = json_encode($skillsList);
        $notesJSON = json_encode($notesList);
        $challengesJSON = json_encode($challengesList);

        $newPost -> activities = $activitiesJSON;
        $newPost -> skills = $skillsJSON;
        $newPost -> notes = $notesJSON;
        $newPost -> challenges = $challengesJSON;
        $newPost-> comments = $comments;


        if ($newPost -> save())
            {return ['status'=>'Your Record Was  Received Very Well'];}
        else
            {return ['status'=>'Order Not Received Try Again '];}

            // return ['status'=>'Order Not Received Try Again '];
    }
}
