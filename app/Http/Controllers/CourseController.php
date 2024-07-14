<?php

namespace App\Http\Controllers;

use App\Models\CourseModel;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
            $data = CourseModel::latest()->get();
            $total = CourseModel::count();

            // return $supervisors;
        return view('components/Course/Index',[
            'data'=>$data,'total'=>$total,
        ]);
    }

    public function getAjaxData($id)
    {
        $data = CourseModel::findOrFail($id);
        return response()->json($data);
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $form_data = array(
            'name'  => trim($request->name),
        );

        // do not allow to enter record twice for today
        if (CourseModel::where('name', $request->name)
            ->exists()) 
            {return redirect()->route('course.index')->with('exist', 'Sorry !! Course Record Already Exists In The System !!');}

        CourseModel::create ($form_data);
        return redirect()->route('course.index')->with('success', 'New Course Record Was Added In The System');
    }


    public function show(string $id)
    {
        $landTitle = CourseModel::findOrFail($id);

        return view('components/Course/Show',[
            'landTitle'=>$landTitle
        ]);
    }


    public function edit(string $id)
    {
        $landTitle = CourseModel::findOrFail($id);

        return view('components/Course/Edit',[
            'landTitle'=>$landTitle,
        ]);
    }


    public function update(Request $request, string $id)
    {
        $rowId = $request->editId;

        $request->validate([
            'name' => 'required',
        ]);

        $form_data = array(
            'name'  => trim($request->name),
        );
        CourseModel::where('id',$rowId)->update($form_data);
        return redirect()->route('course.index')->with('success', 'Course Record Was Updates Very Well');
    }


    public function destroy(Request $request, $id)
    {

        $rowId = $request->all()['deleteId'];

        $data = CourseModel::where('id',$rowId);
        $data ->delete();
        return redirect()->route('course.index')->with('success', 'Course Record Was Deleted Very Well');
        
    }
}
