<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Admin\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = ['a', 'b', 'c', 'd'];
        $customers = Customer::paginate(10);
        return view('backend.show.customers', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create.customer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:customers,email,',
            'status' => 'required',
        ]);
        $model = new Customer();
        $model->name = $request->post('name');
        $model->email = $request->post('email');
        $model->mobile = $request->post('mobile');
        $model->password =Hash::make( $request->post('password'));
        $model->address = $request->post('address');
        $model->city = $request->post('city');
        $model->state = $request->post('state');
        $model->zip = $request->post('zip');
        $model->company = $request->post('company');
        $model->gstin = $request->post('gstin');
        $model->status = $request->post('status');
        $model->save();
        $request->session()->flash('success', 'Account Created Successfully');
        return redirect('dashboard/customer');
    }
    public function show(Request $request,$id)
    {
        $customer = Customer::find($id);
        return view('backend.show.customer', compact('customer'));
    }
    public function status(Request $request,$status, $id)
    {
        $model = Customer::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('success', 'Status updated  Successfully');
        return redirect('dashboard/customer');

    }
}
