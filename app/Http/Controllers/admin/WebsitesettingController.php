<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class WebsitesettingController extends Controller
{
    public function MainWebsiteSetting()
    {
    	$websitesetting = DB::table('websitesettings')->first();
    	return view('admin.setting.websitesetting',compact('websitesetting'));
    }

    public function UpdateWebsite(Request $request, $id)
    {
    	$data = array();

    	$data['phone_en'] = $request->phone_en;
    	$data['phone_hindi'] = $request->phone_hindi;
    	$data['email'] = $request->email;
    	$data['address_en'] = $request->address_en;
    	$data['address_hindi'] = $request->address_hindi;

    	$oldLogo = $request->oldLogo;
        $logo = $request->logo;

        if($logo){
        	$image_one = uniqid().'.'.$logo->getClientOriginalExtension();
            Image::make($logo)->resize(320, 130)->save('image/logo/'.$image_one);
            $data['logo'] = 'image/logo/'.$image_one;
            DB::table('websitesettings')->where('id',$id)->update($data);
            unlink($oldLogo);

            $notifacition = array(
            'message'=> 'Website Setting Updated Successfully',
            'alert-type'=> 'info'

           );

           return Redirect()->route('mainwebsite.setting')->with($notifacition);
        }else{
        	$data['logo'] = $oldLogo;
             DB::table('websitesettings')->where('id',$id)->update($data);
            $notifacition = array(
            'message'=> 'Website Setting Updated Successfully',
            'alert-type'=> 'info'

           );

           return Redirect()->route('mainwebsite.setting')->with($notifacition);
        }

    	
    }
}
