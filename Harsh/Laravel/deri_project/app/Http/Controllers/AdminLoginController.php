<?php

namespace App\Http\Controllers;

use App\Models\admin_login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function admin_auth(Request $request)
    {
        $data=admin_login::where('email',$request->email)->first();

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
        return redirect('/');

    }

    public function admin_login()
    {
        return view('admin.admin_login');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(admin_login $admin_login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin_login $admin_login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin_login $admin_login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin_login $admin_login)
    {
        //
    }
}
