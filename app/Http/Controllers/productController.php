<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class productController extends Controller
{
     public function store(Request $Request)

    {

    	$validation=$Request->validate([

    		'product'=>'required|Alpha',
    		'price'=>'required|integer'



    	]);
    	

    	$pro=array();
    	$pro['product']=$Request->product;
    	$pro['price']=$Request->price;
    	DB::table('product')->insert($pro);

    	$users = DB::select('select * from product');
         return redirect('table')->with('insert','successsfully insert!');
    	
    }

    public function index(){
   $users = DB::select('select * from product');
    return view('table',['users'=>$users]);
}




	public function delete($id) {


 	DB::delete('delete from product where id = ?',[$id]);

	$users = DB::select('select * from product');
	
	return redirect('table')->with('info','successsfully deleted!');



}

public function show($id) {
$users = DB::select('select * from product where id = ?',[$id]);




return redirect('table')->with('up','update');

}
public function edit(Request $request,$id) {
$product = $request->input('product');
$price = $request->input('price');

DB::update('update product set product= ?,price=? where id = ?',[$product,$price,$id]);
return redirect('table')->with('edit','successsfully update!');
}

}
