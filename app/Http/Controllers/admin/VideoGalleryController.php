<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class VideoGalleryController extends Controller
{
    public function index()
    {
        $videos = DB::table('videos')->orderBy('id','desc')->paginate(5);
        return view('admin.videoGallery.index',compact('videos'));
    }

    public function create()
    {
         return view('admin.videoGallery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
                'title' => 'required',
                'embed_code' => 'required'
          ]);

        $data = array();
        $data['title'] = $request->title;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
         DB::table('videos')->insert($data);

        $notifacition = array(
            'message'=> 'Video Inserted Successfully',
            'alert-type'=> 'info'

        );

        return Redirect()->route('videos.index')->with($notifacition);
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $video = DB::table('videos')->where('id',$id)->first();
        return view('admin.videoGallery.edit',compact('video'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
                'title' => 'required',
                'embed_code' => 'required'
        ]);

        $data = array();
        $data['title'] = $request->title;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
         DB::table('videos')->where('id',$id)->update($data);

        $notifacition = array(
            'message'=> 'Video Updated Successfully',
            'alert-type'=> 'info'

        );

        return Redirect()->route('videos.index')->with($notifacition);
    }

    public function destroy($id)
    {
        DB::table('videos')->where('id',$id)->delete();
        $notifacition = array(
            'message'=> 'Video Deleted Successfully',
            'alert-type'=> 'error'

        );

        return Redirect()->back()->with($notifacition);
    }
}
