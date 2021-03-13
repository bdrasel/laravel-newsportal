<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubdistrictController extends Controller
{
  
    public function index()
    {
        $subdistricts = DB::table('subdistracts')
                        ->join('distracts','subdistracts.district_id','distracts.id')
                        ->select('subdistracts.*','distracts.district_en','distracts.district_hindi')
                        ->orderBy('id','DESC')->paginate(5);
        return view('admin.subdistrict.index',compact('subdistricts'));
    }

    public function create()
    {
        $districts = DB::table('distracts')->get();
        return view('admin.subdistrict.create',compact('districts'));
    }

    public function store(Request $request)
    {
         $validated = $request->validate([
                'subdistrict_en' => 'required|unique:subdistracts|max:255',
                'subdistrict_hindi' => 'required|unique:subdistracts|max:255',
               
          ],[

            'subdistrict_en.required' => 'The subdistrict english field is required.',
            'subdistrict_hindi.required' => 'The subdistrict hindi field is required.',

          ]);

          $data = array();
          $data['subdistrict_en'] = $request->subdistrict_en;
          $data['subdistrict_hindi'] = $request->subdistrict_hindi;
          $data['district_id'] = $request->district_id;
          DB::table('subdistracts')->insert($data);

          $notifacition = array(
            'message'=> 'Subdistrict Inserted Successfully',
            'alert-type'=> 'success'

        );

        return Redirect()->route('subdistracts.index')->with($notifacition);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $districts = DB::table('distracts')->get();
        $subdistrict = DB::table('subdistracts')->where('id',$id)->first();
        return view('admin.subdistrict.edit',compact('subdistrict','districts'));
    }

    public function update(Request $request, $id)
    {
         $validated = $request->validate([
                'subdistrict_en' => 'required|unique:subdistracts|max:255',
                'subdistrict_hindi' => 'required|unique:subdistracts|max:255',
          ],[

                'subdistrict_en.required' => 'The subdistrict english field is required.',
                'subdistrict_hindi.required' => 'The subdistrict hindi field is required.',
          ]);

          $data = array();
          $data['subdistrict_en'] = $request->subdistrict_en;
          $data['subdistrict_hindi'] = $request->subdistrict_hindi;
          $data['district_id'] = $request->district_id;
          DB::table('subdistracts')->where('id',$id)->update($data);

          $notifacition = array(
            'message'=> 'Subdistrict Updated Successfully',
            'alert-type'=> 'success'

        );

        return Redirect()->route('subdistracts.index')->with($notifacition);
    }

    public function destroy($id)
    {
         DB::table('subdistracts')->where('id',$id)->delete();
          $notifacition = array(
            'message'=> 'Subdistrict Deleted Successfully',
            'alert-type'=> 'error'

        );

         return Redirect()->back()->with($notifacition);
    }
}
