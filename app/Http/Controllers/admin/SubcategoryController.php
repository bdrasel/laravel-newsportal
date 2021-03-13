<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
{
  
    public function index()
    {
        $subcategories = DB::table('subcategories')
                        ->join('categories','subcategories.category_id','categories.id')
                        ->select('subcategories.*','categories.category_en','categories.category_hindi')
                        ->orderBy('id','DESC')->paginate(5);
        return view('admin.subcategory.index',compact('subcategories'));
    }

    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('admin.subcategory.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
                'subcategory_en' => 'required|unique:subcategories|max:255',
                'subcategory_hindi' => 'required|unique:subcategories|max:255',
          ],[

            'subcategory_en.required' => 'The subcategory english field is required.',
            'subcategory_hindi.required' => 'The subcategory hindi field is required.',
            
          ]);

          $data = array();
          $data['subcategory_en'] = $request->subcategory_en;
          $data['subcategory_hindi'] = $request->subcategory_hindi;
          $data['category_id'] = $request->category_id;
          DB::table('subcategories')->insert($data);

          $notifacition = array(
            'message'=> 'Subcategory Inserted Successfully',
            'alert-type'=> 'success'

        );

        return Redirect()->route('subcategories.index')->with($notifacition);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categories = DB::table('categories')->get();
        $subcategory = DB::table('subcategories')->where('id',$id)->first();
        return view('admin.subcategory.edit',compact('subcategory','categories'));
        
    }

    public function update(Request $request, $id)
    {

          $data = array();
          $data['subcategory_en'] = $request->subcategory_en;
          $data['subcategory_hindi'] = $request->subcategory_hindi;
          $data['category_id'] = $request->category_id;
          DB::table('subcategories')->where('id',$id)->update($data);

          $notifacition = array(
            'message'=> 'Subcategory Updated Successfully',
            'alert-type'=> 'success'

        );

        return Redirect()->route('subcategories.index')->with($notifacition);
    }

    public function destroy($id)
    {
        DB::table('subcategories')->where('id',$id)->delete();
          $notifacition = array(
            'message'=> 'Subcategory Deleted Successfully',
            'alert-type'=> 'error'

        );

         return Redirect()->back()->with($notifacition);
       
    }
}
