<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function destroy()
    {
    	Auth::logout();
    	return Redirect()->route('login')->with('success','user logout');
    }

    public function accountSetting()
    {
    	$id = Auth::user()->id;
    	$editData = User::findOrFail($id);
    	return view('admin.account.profile',compact('editData'));
    }

    public function userAccountEdit()
    {
    	$id = Auth::user()->id;
    	$editData = User::findOrFail($id);
    	return view('admin.account.profile_edit',compact('editData'));
    }

    public function userProfileUpdate(Request $request)
    {
    	$data = User::findOrFail(Auth::user()->id);
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->mobile = $request->mobile;
    	$data->address = $request->address;
    	$data->position = $request->position;
    	$data->gender = $request->gender;

    	if($request->file('image')){
    		$file = $request->file('image');
    		@unlink(public_path('uploads/user/'.$data->image));
    		$fileName = date('Ymdhi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/user'),$fileName);
    		$data['image'] = $fileName;

    	}
    	$data->save();

	    $notifacition = array(
            'message'=> 'User profile Updated Successfully',
            'alert-type'=> 'success'

           );

        return Redirect()->route('user.account')->with($notifacition);

    }

    public function showPassword()
    {
    	return view('admin.password.change_password');
    }

       public function passwordUpdate(Request $request)
    {
    	$validated = $request->validate([
		        'current_password' => 'required',
		        'password' => 'required|confirmed|min:8',
	       ]);

    	$hashedPassword = Auth::user()->password;
    	if(Hash::check($request->current_password, $hashedPassword)){
    		$user = User::findOrFail(Auth::id());
    		$user->password = Hash::make($request->password);
    		$user->save();
    		Auth::logout();

    		$notifacition = array(
            'message'=> 'Password Update Succesfully',
            'alert-type'=> 'success'

           );

    		return Redirect()->route('login')->with($notifacition);
    	}else{

	    	$notifacition = array(
	            'message'=> 'Current password Invalid!',
	            'alert-type'=> 'error'

	        );

    		return Redirect()->back()->with($notifacition);
    	}
    }
}
