<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
    	$categories = DB::table('categories')->orderBy('id','DESC')->paginate(5);
    	return view('admin.category.index',compact('categories'));
    }

    public function addCategory()
    {
    	return view('admin.category.create');
    }

    public function StoreCategory(Request $request)
    {
    	  $validated = $request->validate([
		        'category_en' => 'required|unique:categories|max:255',
		        'category_hindi' => 'required|unique:categories|max:255',
	      ],[

	      	'category_en.required' => 'The category english field is required.',
	      	'category_hindi.required' => 'The category hindi field is required.',

	      ]);

	      $data = array();
	      $data['category_en'] = $request->category_en;
	      $data['category_hindi'] = $request->category_hindi;
	      DB::table('categories')->insert($data);

	      $notifacition = array(
    		'message'=> 'Category Inserted Successfully',
    		'alert-type'=> 'success'

    	);

	    return Redirect()->route('categories')->with($notifacition);

    }

    public function EditCategory($id)
    {
    	$category = DB::table('categories')->where('id',$id)->first();
    	return view('admin.category.edit',compact('category'));
    }

    public function UpdateCategory(Request $request, $id)
    {
    	 $validated = $request->validate([
		        'category_en' => 'required|unique:categories|max:255',
		        'category_hindi' => 'required|unique:categories|max:255',
	      ],[

	      	'category_en.required' => 'The category english field is required.',
	      	'category_hindi.required' => 'The category hindi field is required.',

	      ]);

	      $data = array();
	      $data['category_en'] = $request->category_en;
	      $data['category_hindi'] = $request->category_hindi;
	      DB::table('categories')->where('id',$id)->update($data);

	      $notifacition = array(
    		'message'=> 'Category Updated Successfully',
    		'alert-type'=> 'success'

    	);

	    return Redirect()->route('categories')->with($notifacition);

    }

    public function DeleteCategory($id)
    {
    	 DB::table('categories')->where('id',$id)->delete();
	      $notifacition = array(
			'message'=> 'Category Deleted Successfully',
			'alert-type'=> 'success'

		);

	    return Redirect()->back()->with($notifacition);
    }
}
