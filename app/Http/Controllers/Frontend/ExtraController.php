<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ExtraController extends Controller
{
    public function hindi()
    {
    	Session::get('lang');
    	Session()->forget('lang');
    	Session()->put('lang','hindi');
    	return Redirect()->back();
    }

    public function English()
    {
    	Session::get('lang');
    	Session()->forget('lang');
    	Session()->put('lang','english');
    	return Redirect()->back();
    }

    public function SinglePost($id)
    {
                $categories = DB::table('categories')->orderBy('id','ASC')->get();
                $social = DB::table('social')->first();
                $latest = DB::table('posts')->orderBy('id','desc')->limit(5)->get();
                $favorite = DB::table('posts')->orderBy('id','desc')->inRandomOrder()->limit(5)->get();
                $highest = DB::table('posts')->orderBy('id','asc')->inRandomOrder()->limit(5)->get();
                $headline = DB::table('posts')->where('posts.heeadline',1)->limit(3)->get();
                $notices = DB::table('notices')->first();
                $post = DB::table('posts')
                ->join('categories','posts.category_id','categories.id')
                ->join('subcategories','posts.subcategory_id','subcategories.id')
                ->join('users','posts.user_id','users.id')
                ->select('posts.*','categories.category_en','categories.category_hindi','subcategories.subcategory_en','subcategories.subcategory_hindi','users.name')
                ->where('posts.id',$id)->first();
                $related = DB::table('posts')->where('category_id',$post->category_id)->orderBy('id','desc')->limit(6)->get();
                return view('website.singlePost',compact('post','categories','social','latest','favorite','highest','headline','notices','related'));
    }

    public function CategoryPost($id, $category_en)
    {
        $latest = DB::table('posts')->orderBy('id','desc')->limit(5)->get();
        $favorite = DB::table('posts')->orderBy('id','desc')->inRandomOrder()->limit(5)->get();
        $highest = DB::table('posts')->orderBy('id','asc')->inRandomOrder()->limit(5)->get();
        $categoryPost = DB::table('posts')->where('category_id',$id)->orderBy('id','desc')->paginate(5);
        return view('website.AllPost',compact('categoryPost','latest','favorite','highest'));
    }

    public function SubcategoryPost($id, $subcategory_en)
    {
        $latest = DB::table('posts')->orderBy('id','desc')->limit(5)->get();
        $favorite = DB::table('posts')->orderBy('id','desc')->inRandomOrder()->limit(5)->get();
        $highest = DB::table('posts')->orderBy('id','asc')->inRandomOrder()->limit(5)->get();
        $subcategoryPost = DB::table('posts')->where('subcategory_id',$id)->orderBy('id','desc')->paginate(5);
        return view('website.AllSubPost',compact('subcategoryPost','latest','favorite','highest'));
    }

    public function GetSubDistrict($district_id)
    {
        $subdis = DB::table('subdistracts')->where('district_id',$district_id)->get();
        return response()->json($subdis);
    }

    public function SearchDistrict(Request $request)
    {
        $disId = $request->district_id;
        $SubdisId = $request->subdistrict_id;
        $latest = DB::table('posts')->orderBy('id','desc')->limit(5)->get();
        $favorite = DB::table('posts')->orderBy('id','desc')->inRandomOrder()->limit(5)->get();
        $highest = DB::table('posts')->orderBy('id','asc')->inRandomOrder()->limit(5)->get();
        $categoryPost = DB::table('posts')->where('district_id',$disId)
                        ->where('subdistrict_id',$SubdisId)->orderBy('id','desc')->paginate(5);
        return view('website.AllDistrict',compact('categoryPost','latest','favorite','highest'));
    }
}
