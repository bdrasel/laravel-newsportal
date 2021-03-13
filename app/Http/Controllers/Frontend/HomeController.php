<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function HomeEtc()
    {
    	$categories = DB::table('categories')->orderBy('id','ASC')->get();
    	$livetv = DB::table('livetvs')->first();
    	$social = DB::table('social')->first();
    	$prayer = DB::table('prayers')->first();
    	$websites = DB::table('websites')->get();
    	$headline = DB::table('posts')->where('posts.heeadline',1)->limit(3)->get();
    	$notices = DB::table('notices')->first();
        $firstSectionBig = DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
        $firstSection = DB::table('posts')->where('first_section',1)->orderBy('id','DESC')->limit(8)->get();

        $firstCategory = DB::table('categories')->first();
        $firstCatpostBig = DB::table('posts')->where('category_id',$firstCategory->id)->where('bigthumbnail',1)->first();
        $firstCatpostSmall = DB::table('posts')->where('category_id',$firstCategory->id)->where('bigthumbnail',NULL)->limit(3)->get();

        $secondCategory = DB::table('categories')->skip(1)->first();
        $secondCatpostBig = DB::table('posts')->where('category_id',$secondCategory->id)->where('bigthumbnail',1)->first();
        $secondCatpostSmall = DB::table('posts')->where('category_id',$secondCategory->id)->where('bigthumbnail',NULL)->limit(3)->get();

        $threeCategory = DB::table('categories')->skip(2)->first();
        $threeCatpostBig = DB::table('posts')->where('category_id',$threeCategory->id)->where('bigthumbnail',1)->first();
        $threeCatpostSmall = DB::table('posts')->where('category_id',$threeCategory->id)->where('bigthumbnail',NULL)->limit(3)->get();

         $fourCategory = DB::table('categories')->skip(3)->first();
        $fourCatpostBig = DB::table('posts')->where('category_id',$fourCategory->id)->where('bigthumbnail',1)->first();
        $fourCatpostSmall = DB::table('posts')->where('category_id',$fourCategory->id)->where('bigthumbnail',NULL)->limit(3)->get();

        $fiveCategory = DB::table('categories')->skip(3)->first();
        $fiveCatpostBig = DB::table('posts')->where('category_id',$fiveCategory->id)->where('bigthumbnail',1)->first();
        $fiveCatpostSmall = DB::table('posts')->where('category_id',$fiveCategory->id)->where('bigthumbnail',NULL)->limit(3)->get();

        $photoGallery = DB::table('photos')->where('type',0)->orderBy('id','DESC')->limit(4)->get();
        $photoGalleryBig = DB::table('photos')->where('type',1)->orderBy('id','desc')->first();

        $videoGallery = DB::table('videos')->where('type',0)->orderBy('id','DESC')->limit(4)->get();
        $videoGalleryBig = DB::table('videos')->where('type',1)->orderBy('id','desc')->first();

        $latest = DB::table('posts')->orderBy('id','desc')->limit(5)->get();
        $favorite = DB::table('posts')->orderBy('id','desc')->inRandomOrder()->limit(5)->get();
        $highest = DB::table('posts')->orderBy('id','asc')->inRandomOrder()->limit(5)->get();

        return view('website.home',compact('categories','livetv','social','prayer','websites','headline','notices','firstSectionBig','firstSection','firstCategory','firstCatpostBig','firstCatpostSmall','secondCatpostSmall','secondCategory','secondCatpostBig','threeCategory','threeCatpostBig','threeCatpostSmall','fourCategory','fourCatpostBig','fourCatpostSmall','fiveCategory','fiveCatpostBig','fiveCatpostSmall','photoGalleryBig','photoGallery','videoGallery','videoGalleryBig','latest','favorite','highest'));
    }
}
