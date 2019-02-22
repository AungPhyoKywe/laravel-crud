<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;

use DB;
use Illuminate\Support\Facades\Input;


class CreateController extends Controller
{
    

public function store(Request $request){

	$user=new Student;

	$user->name=Input::get('name');
	$user->email=Input::get('email');
	$user->address=Input::get('address');
	$user->phone=Input::get('phone');
	$user->save();

	
$users = DB::select('select * from students');
return view('crud',['users'=>$users]);

}

public function index(){

$users = DB::select('select * from students');
return view('crud',['users'=>$users]);
}





	public function delete($id) {


   DB::delete('delete from students where id = ?',[$id]);

$users = DB::select('select * from students');
return view('crud',['users'=>$users]);



}



}
