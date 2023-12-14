<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Admin\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = ['a', 'b', 'c', 'd'];
        $coupons = Coupon::paginate(10);
        return view('backend.show.coupon', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create.coupon');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'code' => 'required|unique:coupons,code,',
            'value' => 'required',
        ]);
        echo"<pre>";
        print_r($request->post());
// die();
        $model = new Coupon();
        $model->title = $request->post('title');
        $model->code = $request->post('code');
        $model->value = $request->post('value');
        $model->type = $request->post('type');
        $model->min_order_amt = $request->post('min_order_amt');
        $model->is_one_time = $request->post('is_one_time');
        $model->status= $request->post('status');
        $model->save();
        $request->session()->flash('success', 'Coupon Added Successfully');
        return redirect('dashboard/coupon');
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $coupon = Coupon::find($id);
        return view('backend.update.coupon', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'code' => 'required|unique:coupons,code,'.$request->post('id'),
            'value' => 'required',
        ]);
        $model = Coupon::find($request->post('id'));
        $model->id = $request->post('id');
        $model->title = $request->post('title');
        $model->code = $request->post('code');
        $model->value = $request->post('value');
        $model->type = $request->post('type');
        $model->min_order_amt = $request->post('min_order_amt');
        $model->is_one_time = $request->post('is_one_time');
        $model->status= $request->post('status');
        $model->save();
        $request->session()->flash('success', 'Coupon update Successfully');
        return redirect('dashboard/coupon');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $model = Coupon::find($id);
        $model->delete();
        $request->session()->flash('error', 'coupon Deleted Successfully');
        return redirect('dashboard/coupon');
    }
    public function status(Request $request,$status, $id)
    {
        $model = Coupon::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('success', 'Status updated  Successfully');
        return redirect('dashboard/coupon');

    }
}
