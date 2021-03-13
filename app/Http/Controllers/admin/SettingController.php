<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function socialSetting()
    {
    	$social = DB::table('social')->first();
    	return view('admin.setting.social',compact('social'));
    }

    public function socialUpdate(Request $request, $id)
    {
    	$validated = $request->validate([
                'facebook' => 'required',
                'twitter' => 'required',
                'youtube' => 'required',
                'linkedin' => 'required',
                'instagram' => 'required'
          ]);

    	$data = array();
	      $data['facebook'] = $request->facebook;
	      $data['twitter'] = $request->twitter;
	      $data['youtube'] = $request->youtube;
	      $data['linkedin'] = $request->linkedin;
	      $data['instagram'] = $request->instagram;
	      DB::table('social')->where('id',$id)->update($data);

	      $notifacition = array(
    		'message'=> 'Social Link Updated Successfully',
    		'alert-type'=> 'success'

    	);

	    return Redirect()->back()->with($notifacition);
    }

    public function SeoSetting()
    {
    	$seo = DB::table('seos')->first();
    	return view('admin.setting.seo',compact('seo'));
    }

    public function SeoUpdate(Request $request, $id)
    {
    	$validated = $request->validate([
                'meta_author' => 'required',
                'meta_title' => 'required',
                'meta_keyword' => 'required',
                'meta_description' => 'required',
                'google_analytics' => 'required',
                'alexa_analytics' => 'required',
                'google_verification' => 'required'
          ]);

    	$data = array();
	      $data['meta_author'] = $request->meta_author;
	      $data['meta_title'] = $request->meta_title;
	      $data['meta_keyword'] = $request->meta_keyword;
	      $data['meta_description'] = $request->meta_description;
	      $data['google_analytics'] = $request->google_analytics;
	      $data['google_verification'] = $request->google_verification;
	      $data['alexa_analytics'] = $request->alexa_analytics;
	      DB::table('seos')->where('id',$id)->update($data);

	      $notifacition = array(
    		'message'=> 'Seo Updated Successfully',
    		'alert-type'=> 'success'

    	);

	    return Redirect()->back()->with($notifacition);
    }

	//prayer setting
    public function PrayerSetting()
    {
    	$prayer = DB::table('prayers')->first();
    	return view('admin.setting.prayer',compact('prayer'));
    }

    public function PrayerUpdate(Request $request, $id)
    {
    	$validated = $request->validate([
                'fajar' => 'required',
                'jahor' => 'required',
                'asar' => 'required',
                'magrib' => 'required',
                'esha' => 'required',
                'zummah' => 'required'
          ]);

    	$data = array();
	      $data['fajar'] = $request->fajar;
	      $data['jahor'] = $request->jahor;
	      $data['asar'] = $request->asar;
	      $data['magrib'] = $request->magrib;
	      $data['esha'] = $request->esha;
	      $data['zummah'] = $request->zummah;
	      DB::table('prayers')->where('id',$id)->update($data);

	      $notifacition = array(
    		'message'=> 'Prayer Updated Successfully',
    		'alert-type'=> 'success'

    	);

	    return Redirect()->back()->with($notifacition);
    }



    //Live Tv metnod
    public function liveTvSetting()
    {
    	$livetv = DB::table('livetvs')->first();
    	return view('admin.setting.livetv',compact('livetv'));
    }

     public function liveTvUpdate(Request $request, $id)
    {
    	$validated = $request->validate([
                'embed_code' => 'required',
          ]);

    	$data = array();
	      $data['embed_code'] = $request->embed_code;
	      DB::table('livetvs')->where('id',$id)->update($data);

	      $notifacition = array(
    		'message'=> 'Live Tv Updated Successfully',
    		'alert-type'=> 'success'

    	);

	    return Redirect()->back()->with($notifacition);
    }

    public function ActiveSetting(Request $request, $id)
    {
    	DB::table('livetvs')->where('id',$id)->update(['status'=>1]);
    	$notifacition = array(
    		'message'=> 'Live Tv Active Successfully',
    		'alert-type'=> 'success'

    	);

	    return Redirect()->back()->with($notifacition);
    }

    public function DeactiveSetting(Request $request, $id)
    {
    	DB::table('livetvs')->where('id',$id)->update(['status'=>0]);
    	$notifacition = array(
    		'message'=> 'Live Tv Deactive Successfully',
    		'alert-type'=> 'error'

    	);

	    return Redirect()->back()->with($notifacition);
    }



    //Notice Setting method
     public function noticeSetting()
    {
    	$notice = DB::table('notices')->first();
    	return view('admin.setting.notice',compact('notice'));
    }

     public function noticeUpdate(Request $request, $id)
    {
    	$validated = $request->validate([
                'notice' => 'required',
          ]);

    	$data = array();
	      $data['notice'] = $request->notice;
	      DB::table('notices')->where('id',$id)->update($data);

	      $notifacition = array(
    		'message'=> 'Notice Updated Successfully',
    		'alert-type'=> 'success'

    	);

	    return Redirect()->back()->with($notifacition);
    }

    public function ActiveNotice(Request $request, $id)
    {
    	DB::table('notices')->where('id',$id)->update(['status'=>1]);
    	$notifacition = array(
    		'message'=> 'Live Tv Active Successfully',
    		'alert-type'=> 'success'

    	);

	    return Redirect()->back()->with($notifacition);
    }

    public function DeactiveNotice(Request $request, $id)
    {
    	DB::table('notices')->where('id',$id)->update(['status'=>0]);
    	$notifacition = array(
    		'message'=> 'Live Tv Deactive Successfully',
    		'alert-type'=> 'error'

    	);

	    return Redirect()->back()->with($notifacition);
    }


    //Website Link method
    public function WebsiteSetting()
    {
        $websites = DB::table('websites')->orderBy('id','desc')->paginate(5);
        return view('admin.website.website',compact('websites'));
    }

    public function CreateWebsite()
    {
        return view('admin.website.create');
    }

    public function WebsiteStore(Request $request)
    {
        $validated = $request->validate([
                'website_name' => 'required',
                'website_link' => 'required'
          ]);

          $data = array();
          $data['website_name'] = $request->website_name;
          $data['website_link'] = $request->website_link;
          DB::table('websites')->insert($data);

          $notifacition = array(
            'message'=> 'Website Link Inserted Successfully',
            'alert-type'=> 'success'

        );

        return Redirect()->route('all.website')->with($notifacition);
    }

    public function EditWebsite($id)
    {
        $website = DB::table('websites')->where('id',$id)->first();
        return view('admin.website.edit',compact('website'));
    }

    public function UpdateWebsite(Request $request, $id)
    {
        $validated = $request->validate([
                'website_name' => 'required',
                'website_link' => 'required'
          ]);

          $data = array();
          $data['website_name'] = $request->website_name;
          $data['website_link'] = $request->website_link;
          DB::table('websites')->where('id',$id)->update($data);

          $notifacition = array(
            'message'=> 'Website Link Updated Successfully',
            'alert-type'=> 'success'

        );

        return Redirect()->route('all.website')->with($notifacition);
    }

    public function DeleteWebsite($id)
    {
        DB::table('websites')->where('id',$id)->delete();
          $notifacition = array(
            'message'=> 'Website Link Deleted Successfully',
            'alert-type'=> 'error'

        );

         return Redirect()->route('all.website')->with($notifacition);
    }

}
