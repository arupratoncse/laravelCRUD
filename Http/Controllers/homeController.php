<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class homeController extends Controller
{
    public function index(){
    	$students= Student::paginate(7);
    	return view('index',compact('students'));//compact('students')
    }
    public function create()
    {
    	return view('create');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'fristname' => 'required',
    		'lastname' => 'required',
    		'email' => 'required',
    		'phone' => 'required'
    	]);
    	$student = new Student;
    	$student->first_name=$request->fristname;
    	$student->last_name=$request->lastname;
    	$student->email=$request->email;
    	$student->phone=$request->phone;
    	$student->save();
    	return redirect(route('create'))->with('successMsg','Student Added Successfully!');
    }

    public function edit($id){
    	$students= Student::find($id);
    	return view('edit',compact('students'));//compact('students')
    }

    public function update(Request $request,$id)
    {
    	$this->validate($request,[
    		'fristname' => 'required',
    		'lastname' => 'required',
    		'email' => 'required',
    		'phone' => 'required'
    	]);
    	$student = Student::find($id);
    	$student->first_name=$request->fristname;
    	$student->last_name=$request->lastname;
    	$student->email=$request->email;
    	$student->phone=$request->phone;
    	$student->save();
    	return redirect(route('edit',$student->id))->with('successMsg','Student Updated Successfully!');
    }
    public function delete($id){
    	$students= Student::find($id);
    	$students->delete();
    	return redirect(route('home'))->with('successMsg','Student Deleted Successfully!');
    }
}
