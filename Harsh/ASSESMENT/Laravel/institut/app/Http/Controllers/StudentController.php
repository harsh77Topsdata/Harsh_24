<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('website.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/website.signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new student;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->lang = implode(",", $request->lang);
        $data->gen=$request->gen;
        
        // img upload
        $file = $request->file('image');
        $filename = time() . '_image.' . $request->file('image')->getClientOriginalExtension();
        $file->move('website/upload/users/', $filename);  // use move for move image in public/images
        $data->image = $filename;

        $data->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        $data=student::all();
        return view('/admin.manage_student',['data'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
    }
}
