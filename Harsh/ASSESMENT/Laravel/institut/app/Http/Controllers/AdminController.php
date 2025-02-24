<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin_login()
    {
        return view('admin.admin_login');
    }

    public function admin_auth(Request $request)
    {
        $data=admin::where('email',$request->email)->first();

        if($data)
        {
            if(Hash::check($request->password ,$data->password))
            {
                session()->put('aname',$data->name);
                session()->put('aid',$data->id);
                
                Alert::success('login Sucess',"Admin login sucessfull");
                return redirect('/dashboard');
            }
            else
            {
                Alert::error('login failed',"Password doesn't match");
                return redirect('/admin_login');
            }
        }
        else
        {
            Alert::error('login failed',"Email doesn't exist");
            return redirect('/admin_login');
        }
        

    }

    public function admin_logout()
    {
        session()->pull ('aname');
        session()->pull ('aid');

        Alert::success('logout sucess',"logout sucessfull");
        return redirect('/admin_login');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin_login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}
