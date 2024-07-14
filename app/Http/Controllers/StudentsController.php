<?php

namespace App\Http\Controllers;

use App\Helpers\GeneralHelper;
use App\Models\CourseModel;
use App\Models\StudentsModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function index(Request $request)
    {
        $user = GeneralHelper::getUserName();
        $role = GeneralHelper::getUserRole();


        $supervisors = User::where('role','Supervisor')->get(['id','name']);
        $courses = CourseModel::get();

        if($role == "Admin")
        {
            $data = StudentsModel::latest()->get();
            $total = StudentsModel::count();
        }
        elseif($role == "Supervisor")
        {
            $data = StudentsModel::where("supervisor",$user)->get();
            $total = StudentsModel::where("supervisor",$user)->count();
        }
            // return $supervisors;
        return view('components/Students/Index',[
            'data'=>$data,'total'=>$total,
            'supervisors'=>$supervisors,
            'courses'=>$courses,
        ]);
    }

    public function getAjaxData($id)
    {
        $data = StudentsModel::findOrFail($id);
        return response()->json($data);
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {

            $request->validate([
                'fullName' => 'required',
                'course' => 'required',
                'regNum' => 'required',
                'email' => 'required',
                'supervisor' => 'required',
            ]);

            $form_data = array(
                'fullName'  => trim($request->fullName),
                'course'  => trim($request->course),
                'regNum'  => trim($request->regNum),
                'supervisor'  => trim($request->supervisor),
                'email'=>trim($request->email),
                'dob'=>"",

            );

            // do not allow to enter record twice for today
            if (StudentsModel::where('fullName', $request->fullName)
                ->where('course', $request->course)
                ->where('regNum', $request->regNum)
                ->where('supervisor', $request->supervisor)
                ->exists()) 
                {return redirect()->route('students.index')->with('exist', 'Sorry !! Student Record Already Exists In The System !!');}

            StudentsModel::create ($form_data);
            return redirect()->route('students.index')->with('success', 'New Student Record Was Added In The System');
    }

    public function show(string $id)
    {
        $landTitle = StudentsModel::findOrFail($id);

        return view('components/Students/Show',[
            'landTitle'=>$landTitle
        ]);
    }


    public function edit(string $id)
    {
        $landTitle = StudentsModel::findOrFail($id);

        return view('components/Students/Edit',[
            'landTitle'=>$landTitle,
        ]);
    }


    public function update(Request $request, string $id)
    {
        $rowId = $request->editId;

        $request->validate([
            'fullName' => 'required',
            'course' => 'required',
            'regNum' => 'required',
            'email' => 'required',
            'supervisor' => 'required',
        ]);

        $form_data = array(
            'fullName'  => trim($request->fullName),
            'course'  => trim($request->course),
            'regNum'  => trim($request->regNum),
            'supervisor'  => trim($request->supervisor),
            'email'=>trim($request->email),

        );
        StudentsModel::where('id',$rowId)->update($form_data);
        return redirect()->route('students.index')->with('success', 'Student Record Was Updates Very Well');
    }


    public function destroy(Request $request, $id)
    {

        $rowId = $request->all()['deleteId'];

        $data = StudentsModel::where('id',$rowId);
        $data ->delete();
        return redirect()->route('students.index')->with('success', 'Student Record Was Deleted Very Well');
        
    }
}
