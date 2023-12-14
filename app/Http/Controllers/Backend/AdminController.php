<?php

namespace App\Http\Controllers\backend;

use App\Models\Admin\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.main');
        // return view('admin.pages.settings');
        // return view('layouts.admin.AdminLayout');
        // return view('admin.auth.sign-in');
        // return view('layouts.app.AppLayout');
    }
    public function login(Request $request)
    {

        if ($request->session()->has('Admin_Login')) {
            return redirect('/dashboard');
        } else {
            return view('frontend.admin.login');
        }
    }
    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        // $result = Admin::where(['email' => $email, 'password' => $password])->get();
        $result = Admin::where(['email' => $email])->first();
        if ($result) {
            if (Hash::check($password, $result->password)) {
                $request->session()->put('Admin_Login', true);
                $request->session()->put('Admin_id', $result->id);
                return redirect('dashboard');
            } else {
                $request->session()->flash('error', 'Invalid Password');
                return redirect('login');
            }
        } else {
            $request->session()->flash('error', 'Invalid id or Password');
            return redirect('login');
        }

        //
        // if (isset($result['0']->id)) {
        //     $request->session()->put('Admin_Login', true);
        //     $request->session()->put('Admin_id', $result['0']->id);
        //     return redirect('dashboard');
        // } else {
        //     $request->session()->put('error', 'Invalid id or Password');
        //     return redirect('login');
        // }
        // return $request->post();

    }
    public function updatePassword()
    {
        $r = Admin::find(1);
        $r->password = Hash::make('password');
        $r->save();
    }
    public function register()
    {
        return view('frontend.admin.signup');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $r = Admin::find(1);
        // $r->password = Hash::make('password');
        // $r->save();
        $name = $request->post('name');
        $email = $request->post('email');
        $password =Hash::make( $request->post('password'));
        $confirm = Hash::make($request->post('password2'));
        $admin = new Admin();
        $admin->name = $name;
        $admin->email = $email;
        $admin->password = $password;
        $admin->confirm = $confirm;
        $admin->save();
        $request->session()->flash('message', 'User Added Successfully');
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
