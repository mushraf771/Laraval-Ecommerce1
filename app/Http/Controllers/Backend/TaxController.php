<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Admin\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = ['a', 'b', 'c', 'd'];
        $taxes = Tax::paginate(10);
        return view('backend.show.tax', compact('taxes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create.tax');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tax_desc' => 'required|unique:taxes,tax_desc,',
            'tax_value' => 'required',
        ]);
        $model = new tax();
        $model->tax_desc = $request->post('tax_desc');
        $model->tax_value = $request->post('tax_value');
        $model->status = $request->post('status');
        $model->save();
        $request->session()->pull('success', 'Tax Added Successfully');
        return redirect('dashboard/tax');
    }

    /**
     * Display the specified resource.
     */
    public function show(tax $tax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $tax = Tax::find($id);
        return view('backend.update.tax', compact('tax'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $request->validate([
            'tax_desc' => 'required|unique:taxes,tax_desc,'.$request->post('id'),
            'tax_value' => 'required',
        ]);
        $model = Tax::find($request->post('id'));
        $model->id = $request->post('id');
        $model->tax_desc = $request->post('tax_desc');
        $model->tax_value = $request->post('tax_value');
        $model->status = $request->post('status');
        $model->save();
        $request->session()->pull('success', 'tax Updated Successfully');
        return redirect('dashboard/tax');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $model = Tax::find($id);
        $model->delete();
        $request->session()->pull('error', 'Tax Deleted Successfully');
        return redirect('dashboard/tax');
    }
    public function status(Request $request,$status, $id)
    {
        $model = Tax::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->pull('success', 'Status updated  Successfully');
        return redirect('dashboard/tax');

    }
}
