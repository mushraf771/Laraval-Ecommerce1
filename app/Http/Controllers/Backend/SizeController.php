<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Admin\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = ['a', 'b', 'c', 'd'];
        $sizes = Size::paginate(10);
        return view('backend.show.size', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create.size');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'size' => 'required|unique:sizes,size,',
            'status' => 'required',
        ]);
        $model = new Size();
        $model->size = $request->post('size');
        $model->status = $request->post('status');
        // $model->status = 1;
        $model->save();
        $request->session()->pull('success', 'size Added Successfully');
        return redirect('dashboard/size');
    }

    /**
     * Display the specified resource.
     */
    public function show(size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $size = Size::find($id);
        return view('backend.update.size', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $request->validate([
            'size' => 'required|unique:sizes,size,'.$request->post('id'),
            'status' => 'required',
        ]);
        $model = Size::find($request->post('id'));
        $model->id = $request->post('id');
        $model->size = $request->post('size');
        $model->status = $request->post('status');
        $model->save();
        $request->session()->pull('success', 'Size Updated Successfully');
        return redirect('dashboard/size');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $model = Size::find($id);
        $model->delete();
        $request->session()->pull('error', 'Size Deleted Successfully');
        return redirect('dashboard/size');
    }
    public function status(Request $request,$status, $id)
    {
        $model = Size::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->pull('success', 'Status updated  Successfully');
        return redirect('dashboard/size');

    }
}
