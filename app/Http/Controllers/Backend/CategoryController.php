<?php

namespace App\Http\Controllers\backend;

use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::paginate(10);
        // $categories = ['a', 'b', 'c'];
        return view('backend.show.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status','1')->get();
        // dump($categories);
        return view('backend.create.category',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->post());
        // echo"</pre>";
        $request->validate([
            'name' => 'required|unique:categories',
            // 'slug' => 'required|unique:categories',
            'category_image' => 'mimes:jpeg,jpg,png',
        ]);
        if ($request->hasFile('category_image')) {
            $image = $request->file('category_image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $img = $image->storeAs('public/media/categories', $image_name);
        }
        $model = new Category();
        $model->name = $request->post('name');
        // $model->slug = $request->post('slug');
        if ($request->post('parent_id')>= 1) {
            $model->parent_id = $request->post('parent_id');
        }else{
            $model->parent_id = null;
        }
        $model->category_image = $img;
        $model->status = $request->post('status');
        $model->featured =$request->post('featured');
        $model->show_in_menu =$request->post('show_in_menu');
        // $model->status =1;
        $model->save();
        $request->session()->flash('success', 'Category Added Successfully');
        return redirect('dashboard/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        // $category = Category::where(['id'=>$id])->get();
        $category = Category::find($id);
        $categories = Category::where('status','1')->where('id','!=',$id)->get();
        return view('backend.update.category', compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:categories,name,'.$request->post('id'),
            // 'slug'=>'required|unique:categories,slug,'.$request->post('id'),
        ]);
        $model = Category::find($request->post('id'));
        $img = $model->category_image;
        if($request->hasFile('category_image')) {
            Storage::delete($model->category_image);
            $image = $request->file('category_image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $img = $image->storeAs('public/media/categories', $image_name);
        }
        $model->name = $request->post('name');
        // $model->slug = $request->post('slug');
        if ($request->post('parent_id')>= 1) {
            $model->parent_id = $request->post('parent_id');
        }else{
            $model->parent_id = null;
        }
        $model->id = $request->post('id');
        $model->category_image = $img;
        $model->status = $request->post('status');
        $model->featured =$request->post('featured');
        $model->save();
        $request->session()->pull('success', 'Category Updated Successfully');
        return redirect('dashboard/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $model = Category::find($id);
        $img = $model->image;
        Storage::delete($img);
        $model->delete();
        $request->session()->flash('error', 'Category Deleted Successfully');
        return redirect('dashboard/category');
    }
    public function status(Request $request,$status, $id)
    {
        $model = Category::find($id);

        if ($status == 1) {
            $request->session()->flash('success', 'Product Showing Successfully');
        } else {
            $request->session()->flash('success', 'Product Hided Successfully');
        }
        $model->status=$status;
        $model->save();
        return redirect('dashboard/category');

    }
    public function featured(Request $request,$featured, $id)
    {
        $model = Category::find($id);
        $model->featured=$featured;
        $model->save();
        $request->session()->flash('message', 'featured updated  Successfully');
        return redirect('dashboard/category');

    }
}
