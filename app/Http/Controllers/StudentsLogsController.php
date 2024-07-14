<?php

namespace App\Http\Controllers;

use App\Helpers\GeneralHelper;
use App\Models\StudentsLogsModel;
use Illuminate\Http\Request;

class StudentsLogsController extends Controller
{
    public function index(Request $request)
    {
        $user = GeneralHelper::getUserName();
        $role = GeneralHelper::getUserRole();

        if($role == "Admin")
        {
            $data = StudentsLogsModel::get();
            $total = StudentsLogsModel::count();
        }
        elseif($role == "Supervisor")
        {
            $data = StudentsLogsModel::where("Supervisor",$user)->get();
            $total = StudentsLogsModel::where("Supervisor",$user)->count();
        }

        return view('components/Logs/Index',[
            'data'=>$data,'total'=>$total,
        ]);
    }

    public function getAjaxData($id)
    {
        $data = StudentsLogsModel::findOrFail($id);
        return response()->json($data);
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {

    }


    public function show(string $id)
    {
        $landTitle = StudentsLogsModel::findOrFail($id);

        return view('components/Logs/Show',[
            'landTitle'=>$landTitle
        ]);
    }


    public function edit(string $id)
    {
        $landTitle = StudentsLogsModel::findOrFail($id);

        return view('components/Logs/Edit',[
            'landTitle'=>$landTitle,
        ]);
    }


    public function update(Request $request, string $id)
    {
        $rowId = $request->editId;
        $status = "Approved";
        $comments = $request->all()['comments'];
        $JsonComments = json_encode($comments);

        $form_data = array('comments'  => $JsonComments,'status'  => $status);
        StudentsLogsModel::where('id',$rowId)->update($form_data);
        return redirect()->route('students-logs.index')->with('success', 'Comment Was Saved Very Well');
    }


    public function destroy(Request $request, $id)
    {

        $rowId = $request->all()['deleteId'];

        $data = StudentsLogsModel::where('id',$rowId);
        $data ->delete();
        return redirect()->route('students-logs.index')->with('success', 'Student Record Was Deleted Very Well');
        
    }
}
