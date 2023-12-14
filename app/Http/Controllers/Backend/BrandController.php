<?php

namespace App\Http\Controllers\backend;
use App\Models\Admin\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = ['a', 'b', 'c', 'd'];
        $brands = Brand::paginate(10);
        return view('backend.show.brand', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create.brand');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:brands,name,',
            'logo' => 'required|mimes:jpeg,jpg,png',
            // .$request->post('id'),
            // 'status' => 'required',
        ]);
        $model = new Brand();
        $model->name = $request->post('name');
        if ($request->hasFile("logo")) {
            $logo = $request->file("logo");
            $filename = uniqid() . '.' . $logo->getClientOriginalExtension();
            $img = $logo->storeAs('public/media/brands', $filename);
            $model->logo = $img;
        }
        $model->top_brand = $request->post('top_brand');
        $model->status = $request->post('status');
        $model->save();
        $request->session()->flash('success', 'brand Added Successfully');
        return redirect('dashboard/brand');
    }

    /**
     * Display the specified resource.
     */
    public function show(brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        // $brand = Category::where(['id'=>$id])->get();
        $brand = Brand::find($id);
        // echo"hs hvhjvjhvhcjc";
        return view('backend.update.brand', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:brands,name,'.$request->post('id'),
            'logo' => 'mimes:jpeg,jpg,png',
        ]);
        $model = Brand::find($request->post('id'));
        $model->id = $request->post('id');
        $model->name = $request->post('name');
        if ($request->hasFile("logo")) {
            $logo = $request->file("logo");
            Storage::delete($model->logo);
            $filename = uniqid() . '.' . $logo->getClientOriginalExtension();
            $img = $logo->storeAs('public/media/brands', $filename);
            $model->logo = $img;
        }
        $model->status = $request->post('status');
        $model->top_brand = $request->post('top_brand');
        $model->save();
        $request->session()->flash('success', 'brand Added Successfully');
        return redirect('dashboard/brand');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $model = Brand::find($id);
        // dd($model->logo);
        // die();
        if (Storage::exists($model->logo)) {
            Storage::delete($model->logo);
        }
        $model->delete();
        $request->session()->flash('error', 'Brand Deleted Successfully');
        return redirect('dashboard/brand');
    }
    public function status(Request $request,$status, $id)
    {
        $model = Brand::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('success', 'Status updated  Successfully');
        return redirect('dashboard/brand');

    }
    public function top_brand(Request $request,$top_brand, $id)
    {
        $model = Brand::find($id);
        $model->top_brand=$top_brand;
        $model->save();
        $request->session()->flash('success', 'top_brand updated  Successfully');
        return redirect('dashboard/brand');

    }
}
