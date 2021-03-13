<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{
 
    public function index()
    {
        $districts = DB::table('distracts')->orderBy('id','DESC')->paginate(3);
        return view('admin.district.index',compact('districts'));
    }

    public function create()
    {
        return view('admin.district.create');
    }

    public function store(Request $request)
    {
         $validated = $request->validate([
                'district_en' => 'required|unique:distracts|max:255',
                'district_hindi' => 'required|unique:distracts|max:255',
          ],[

            'district_en.required' => 'The district english field is required.',
            'district_hindi.required' => 'The district hindi field is required.',

          ]);

          $data = array();
          $data['district_en'] = $request->district_en;
          $data['district_hindi'] = $request->district_hindi;
          DB::table('distracts')->insert($data);

          $notifacition = array(
            'message'=> 'District Inserted Successfully',
            'alert-type'=> 'success'

        );

        return Redirect()->route('distracts.index')->with($notifacition);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $district = DB::table('distracts')->where('id',$id)->first();
        return view('admin.district.edit',compact('district'));
    }

    public function update(Request $request, $id)
    {
         $validated = $request->validate([
                'district_en' => 'required|unique:distracts|max:255',
                'district_hindi' => 'required|unique:distracts|max:255',
          ],[

            'district_en.required' => 'The district english field is required.',
            'district_hindi.required' => 'The district hindi field is required.',

          ]);

          $data = array();
          $data['district_en'] = $request->district_en;
          $data['district_hindi'] = $request->district_hindi;
          DB::table('distracts')->where('id',$id)->update($data);

          $notifacition = array(
            'message'=> 'District Updated Successfully',
            'alert-type'=> 'success'

        );

        return Redirect()->route('distracts.index')->with($notifacition);
    }

    public function destroy($id)
    {
         DB::table('distracts')->where('id',$id)->delete();
          $notifacition = array(
            'message'=> 'District Deleted Successfully',
            'alert-type'=> 'error'

        );

        return Redirect()->back()->with($notifacition);
    }
}
