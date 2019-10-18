<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller {
	public function add(Request $request) {
		$data = new Student ();
		$data->name = $request->name;
		$data->age = $request->age;
		$data->profession = $request->profession;
		$data->save ();
		return $data;
	}
	public function list() {
		$data = Student::all ();
		return $data;
	}
	public function delete(Request $request) {
		$data = Student::find ( $request->id )->delete ();
	}
	public function edit(Request $request, $id){
		$data = Student::where('id', $id)->first();
		$data->name = $request->get('val_1');
		$data->age = $request->get('val_2');
		$data->profession = $request->get('val_3');
		$data->save();
		return $data;
	}
}