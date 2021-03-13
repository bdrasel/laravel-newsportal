<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Image;

class PostController extends Controller
{
   
    public function index()
    {
        $posts = DB::table('posts')
                ->join('categories','posts.category_id','categories.id')
                ->join('subcategories','posts.subcategory_id','subcategories.id')
                ->join('distracts','posts.district_id','distracts.id')
                ->join('subdistracts','posts.subdistrict_id','subdistracts.id')
                ->select('posts.*','categories.category_en','subcategories.subcategory_en','distracts.district_en','subdistracts.subdistrict_en')
                ->orderBy('id','DESC')->paginate(5);
                return view('admin.post.index',compact('posts'));
    }

    public function create()
    {
        $categories = DB::table('categories')->get();
        $districts = DB::table('distracts')->get();
        return view('admin.post.create',compact('categories','districts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
                'category_id' => 'required',
                'district_id' => 'required'
          ]);

        $data = array();
        $data['title_en'] = $request->title_en;
        $data['title_hindi'] = $request->title_hindi;
        $data['user_id'] = Auth::id();
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['district_id'] = $request->district_id;
        $data['subdistrict_id'] = $request->subdistrict_id;
        $data['tags_en'] = $request->tags_en;
        $data['tags_hindi'] = $request->tags_hindi;
        $data['details_en'] = $request->details_en;
        $data['details_hindi'] = $request->details_hindi;
        $data['heeadline'] = $request->heeadline;
        $data['first_section'] = $request->first_section;
        $data['bigthumbnail'] = $request->bigthumbnail;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['post_date'] = date('d-m-Y');
        $data['post_month'] = date('F');

        $image = $request->image;

        if($image){
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500, 300)->save('image/post/'.$image_one);
            $data['image'] = 'image/post/'.$image_one;
            DB::table('posts')->insert($data);

            $notifacition = array(
            'message'=> 'Post Inserted Successfully',
            'alert-type'=> 'success'

           );

           return Redirect()->route('posts.index')->with($notifacition);
        }else{
            $notifacition = array(
            'message'=> 'Post Inserted Fail',
            'alert-type'=> 'error'

           );

           return Redirect()->back()->with($notifacition);
        }
  
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        $categories = DB::table('categories')->get();
        $districts = DB::table('distracts')->get();
        $subcateogries = DB::table('subcategories')->where('category_id',$post->category_id)->get();
        $subdistracts = DB::table('subdistracts')->where('district_id',$post->district_id)->get();
        return view('admin.post.edit',compact('post','categories','districts','subcateogries','subdistracts'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
                'category_id' => 'required',
                'district_id' => 'required'
          ]);

        $data = array();
        $data['title_en'] = $request->title_en;
        $data['title_hindi'] = $request->title_hindi;
        $data['user_id'] = Auth::id();
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['district_id'] = $request->district_id;
        $data['subdistrict_id'] = $request->subdistrict_id;
        $data['tags_en'] = $request->tags_en;
        $data['tags_hindi'] = $request->tags_hindi;
        $data['details_en'] = $request->details_en;
        $data['details_hindi'] = $request->details_hindi;
        $data['heeadline'] = $request->heeadline;
        $data['first_section'] = $request->first_section;
        $data['bigthumbnail'] = $request->bigthumbnail;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;


        $oldImage = $request->oldimage;
        $image = $request->image;
        if($image){
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500, 300)->save('image/post/'.$image_one);
            $data['image'] = 'image/post/'.$image_one;
            DB::table('posts')->where('id',$id)->update($data);
            unlink($oldImage);

            $notifacition = array(
            'message'=> 'Post Updated Successfully',
            'alert-type'=> 'success'

           );

           return Redirect()->route('posts.index')->with($notifacition);
        }else{
            $data['image'] = $oldImage;
             DB::table('posts')->where('id',$id)->update($data);
            $notifacition = array(
            'message'=> 'Post Updated Successfully',
            'alert-type'=> 'success'

           );

           return Redirect()->route('posts.index')->with($notifacition);
        }
  
    }

    public function destroy($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        unlink($post->image);
        DB::table('posts')->where('id',$id)->delete();
        $notifacition = array(
        'message'=> 'Post Deleted Successfully',
        'alert-type'=> 'error'

       );

       return Redirect()->back()->with($notifacition);
    }

    public function GetSubcategory($category_id)
    {
        $sub = DB::table('subcategories')->where('category_id',$category_id)->get();
        return response()->json($sub);
    }

    public function GetSubDistrict($district_id)
    {
        $subdis = DB::table('subdistracts')->where('district_id',$district_id)->get();
        return response()->json($subdis);
    }
}
