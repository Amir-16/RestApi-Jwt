<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{

	public function index(){

		$student =Student::get();
		return response()->json($student);

	} 


	public function store(Request $request){

		$data=array();
		$data['name']=$request->name;
		$data['subject_id']=$request->subject_id;
		$data['student_class_id']=$request->student_class_id;
		$data['fname']=$request->fname;
		$data['mname']=$request->mname;
		$data['photo']=$request->photo;
		$insert=DB::table('students')->insert($data);
		return response('Insert successfully');
	}
}
