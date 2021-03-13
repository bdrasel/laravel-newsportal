<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
	public function __construct()
    {
        return $this->middleware('auth');
    }

    public function insertUser()
    {
    	return view('admin.role.insert');
    }

    public function storeUser(Request $request)
    {
    	$validated = $request->validate([
		        'name' => 'required|',
		        'email' => 'required|unique:users|max:255',
		        'password'=>'required'
	      ]);

    	$data = array();

    	$data['name'] = $request->name;
    	$data['email'] = $request->email;
    	$data['password'] = Hash::make($request['password']);
    	$data['category'] = $request->category;
    	$data['district'] = $request->district;
    	$data['post'] = $request->post;
    	$data['setting'] = $request->setting;
    	$data['website'] = $request->website;
    	$data['gallery'] = $request->gallery;
    	$data['ads'] = $request->ads;
    	$data['role'] = $request->role;
    	$data['type'] = 0;

    	DB::table('users')->insert($data);

    	$notifacition = array(
    		'message'=> 'User Role Inserted Successfully',
    		'alert-type'=> 'success'

    	);

	    return Redirect()->route('user.index')->with($notifacition);
    }

    public function AllUser()
    {
    	$allUser = DB::table('users')->where('type',0)->get();
    	return view('admin.role.index',compact('allUser'));
    }

    public function EditUser($id)
    {
    	$user = DB::table('users')->where('id',$id)->first();
    	return view('admin.role.edit',compact('user'));
    }

    public function UpdateUser(Request $request, $id)
    {
    	$data = array();

    	$data['name'] = $request->name;
    	$data['email'] = $request->email;
    	$data['category'] = $request->category;
    	$data['district'] = $request->district;
    	$data['post'] = $request->post;
    	$data['setting'] = $request->setting;
    	$data['website'] = $request->website;
    	$data['gallery'] = $request->gallery;
    	$data['ads'] = $request->ads;
    	$data['role'] = $request->role;
    	$data['type'] = 0;

    	DB::table('users')->where('id',$id)->update($data);

    	$notifacition = array(
    		'message'=> 'User Role Updated Successfully',
    		'alert-type'=> 'info'

    	);

	    return Redirect()->route('user.index')->with($notifacition);
    }
}
