<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
    	$students = Student::paginate(2);
    	return view('welcome', compact('students'));
    }

    public function create()
    {
    	return view('create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'fname' => 'required',
    		'lname' => 'required',
    		'email' => 'required',
    		'phone' => 'required'
    	]);

    	$student = new Student;

    	$student->FIRST_NAME = $request->fname;
    	$student->LAST_NAME = $request->lname;
    	$student->EMAIL = $request->email;
    	$student->PHONE = $request->phone;

    	$student->save();

    	return redirect(route('home'))->with('successMsg', 'Student successfully added');
    }

    public function edit($id)
    {
    	$student = Student::find($id);
    	return view('edit', compact('student'));
    }

    public function update( Request $request, $id)
    {
    	$this->validate($request, [
    		'fname' => 'required',
    		'lname' => 'required',
    		'email' => 'required',
    		'phone' => 'required'
    	]);

    	$student = Student::find($id);

    	$student->FIRST_NAME = $request->fname;
    	$student->LAST_NAME = $request->lname;
    	$student->EMAIL = $request->email;
    	$student->PHONE = $request->phone;

    	$student->save();

    	return redirect(route('home'))->with('successMsg', 'Student successfully updated');
    }


    public function delete($id)
    {
    	Student::find($id)->delete();
    	return redirect(route('home'))->with('successMsg', 'Student Record Deleted Successfully');
    }
}
