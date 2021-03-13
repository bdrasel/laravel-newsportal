<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class GalleryController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function PhotoGallery()
    {
    	$photos = DB::table('photos')->orderBy('id','desc')->paginate(5);
    	return view('admin.gallery.photo',compact('photos'));
    }

    public function CreateGallery()
    {
    	return view('admin.gallery.create');
    }

    public function PhotoStore(Request $request)
    {
    	$validated = $request->validate([
                'title' => 'required',
                'photo' => 'required'
          ]);

    	$data = array();
        $data['title'] = $request->title;
        $data['photo'] = $request->photo;
        $data['type'] = $request->type;

        $image = $request->photo;
        if($image){
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(596, 340)->save('image/photogallery/'.$image_one);
            $data['photo'] = 'image/photogallery/'.$image_one;
            DB::table('photos')->insert($data);

            $notifacition = array(
            'message'=> 'Photo Inserted Successfully',
            'alert-type'=> 'success'

           );

           return Redirect()->route('all.photo')->with($notifacition);
        }else{
            $notifacition = array(
            'message'=> 'Photo Inserted Fail',
            'alert-type'=> 'error'

           );

           return Redirect()->back()->with($notifacition);
        }

    }

    public function PhotoEdit($id)
    {
    	$photo = DB::table('photos')->where('id',$id)->first();
    	return view('admin.gallery.edit',compact('photo'));
    }

    public function UpdatePhoto(Request $request, $id)
    {
    
    	$data = array();
        $data['title'] = $request->title;
        $data['photo'] = $request->photo;
        $data['type'] = $request->type;

        $oldImage = $request->oldimage;
        $image = $request->photo;
        if($image){
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(596, 340)->save('image/photogallery/'.$image_one);
            $data['photo'] = 'image/photogallery/'.$image_one;
            DB::table('photos')->where('id',$id)->update($data);
            unlink($oldImage);

            $notifacition = array(
            'message'=> 'Photo Updated Successfully',
            'alert-type'=> 'success'

           );

           return Redirect()->route('all.photo')->with($notifacition);
        }else{
        	$data['photo'] = $oldImage;
             DB::table('photos')->where('id',$id)->update($data);
            $notifacition = array(
            'message'=> 'Photo Updated Successfully',
            'alert-type'=> 'success'

           );

           return Redirect()->route('all.photo')->with($notifacition);
        }

    }

    public function DeletePhoto($id)
    {
    	$photo = DB::table('photos')->where('id',$id)->first();
    	unlink($photo->photo);
        DB::table('photos')->where('id',$id)->delete();
    	 $notifacition = array(
            'message'=> 'Photo Deleted Successfully',
            'alert-type'=> 'error'

           );

           return Redirect()->back()->with($notifacition);
    }
}
