<?php

namespace App\Http\Controllers\backend;

use App\Models\Admin\Color;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = ['a', 'b', 'c', 'd'];
        $colors = Color:: paginate(10);
        return view('backend.show.color', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create.color');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'color' => 'required|unique:colors,color,'.$request->post('id'),
            'status' => 'required',
        ]);
        $model = new Color();
        $model->color = $request->post('color');
        $model->status = $request->post('status');

        $model->save();
        $request->session()->pull('message', 'color Added Successfully');
        return redirect('dashboard/color');
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        // $color = Category::where(['id'=>$id])->get();
        $color = Color:: find($id);
        // echo"hs hvhjvjhvhcjc";
        return view('backend.update.color', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $request->validate([
            'color' => 'required|unique:colors,color,'.$request->post('id'),
            'status' => 'required',
        ]);
        echo "<pre>";
        print_r($request->post());
        echo "</pre>";
        // $color = Category::find($id);
        $color = Color:: find($request->post('id'));
        echo $color;
// die();
        // $model = new Category();
        $model = Color:: find($request->post('id'));
        $model->id = $request->post('id');
        $model->color = $request->post('color');
        $model->status = $request->post('status');
        $model->save();
        $request->session()->pull('message', 'color Added Successfully');
        return redirect('dashboard/color');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $model = Color:: find($id);
        $model->delete();
        $request->session()->pull('message', 'color Deleted Successfully');
        return redirect('dashboard/color');
    }
    public function status(Request $request,$status, $id)
    {
        $model = Color:: find($id);
        $model->status=$status;
        $model->save();
        $request->session()->pull('message', 'Status updated  Successfully');
        return redirect('dashboard/color');

    }
}
