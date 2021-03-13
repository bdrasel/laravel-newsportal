<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class AdsController extends Controller
{
	public function __construct()
    {
        return $this->middleware('auth');
    }

    public function Listads()
    {
    	$ads = DB::table('ads')->orderBy('id','desc')->get();
    	return view('admin.ads.listAds',compact('ads'));
    }

    public function addList()
    {
    	return view('admin.ads.addList');
    }

    public function StoreAds(Request $request)
    {
    	$validated = $request->validate([
                'link' => 'required'
          ]);

    	$data = array();
        $data['link'] = $request->link;
        
         if($request->type == 2){
        	   $image = $request->ads;
	            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
	            Image::make($image)->resize(970, 90)->save('image/ads/'.$image_one);
	            $data['ads'] = 'image/ads/'.$image_one;
	            $data['type'] = 2;
	            DB::table('ads')->insert($data);

	            $notifacition = array(
	            'message'=> 'Horizontal Ads Inserted Successfully',
	            'alert-type'=> 'success'

	           );

	           return Redirect()->route('list.ads')->with($notifacition);
	     

       }else{
       		$image = $request->ads;
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save('image/ads/'.$image_one);
            $data['ads'] = 'image/ads/'.$image_one;
            $data['type'] = 1;
            DB::table('ads')->insert($data);

            $notifacition = array(
            'message'=> 'Vertical Ads Inserted Successfully',
            'alert-type'=> 'success'

           );

           return Redirect()->route('list.ads')->with($notifacition);

       }

   }

   public function EditAds($id)
    {
    	$row = DB::table('ads')->where('id',$id)->first();
    	return view('admin.ads.edit',compact('row'));
    }

    public function UpdateAds(Request $request, $id)
    {
    
    	$data = array();
    	$oldImage = $request->oldimage;
        $data['link'] = $request->link;

        $oldImage = $request->oldimage;
        $image = $request->ads;

        	  if($request->type == 2){
        	   $image = $request->ads;
	            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
	            Image::make($image)->resize(970, 90)->save('image/ads/'.$image_one);
	            $data['ads'] = 'image/ads/'.$image_one;
	            $data['type'] = 2;
	            DB::table('ads')->where('id',$id)->update($data);
	            unlink($oldImage);

	            $notifacition = array(
	            'message'=> 'Horizontal Ads Updated Successfully',
	            'alert-type'=> 'success'

	           );

	           return Redirect()->route('list.ads')->with($notifacition);
	     

       }else{
         	$oldImage = $request->oldimage;
       		$image = $request->ads;
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save('image/ads/'.$image_one);
            $data['ads'] = 'image/ads/'.$image_one;
            $data['type'] = 1;
            DB::table('ads')->where('id',$id)->update($data);
            unlink($oldImage);

            $notifacition = array(
            'message'=> 'Vertical Ads Updated Successfully',
            'alert-type'=> 'success'

           );

           return Redirect()->route('list.ads')->with($notifacition);

       }
      
        
    }


    public function DeleteAds($id)
    {
    	$ads = DB::table('ads')->where('id',$id)->first();
    	unlink($ads->ads);
        DB::table('ads')->where('id',$id)->delete();
    	 $notifacition = array(
            'message'=> 'Ads Deleted Successfully',
            'alert-type'=> 'error'

           );

           return Redirect()->back()->with($notifacition);
    }
}
