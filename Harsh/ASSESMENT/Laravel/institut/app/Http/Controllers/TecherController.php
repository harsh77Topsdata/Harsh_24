<?php

namespace App\Http\Controllers;

use App\Models\techer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash; 


class TecherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/website.teacher');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_teacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new techer;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->gen = $request->gender;
        $data->subject=$request->subject;
        $data->lag = implode(",", $request->lag);

        $file = $request->file('image');
        $filename = time() . '_image.' . $request->file('image')->getClientOriginalExtension();
        $file->move('admin/upload/teach/', $filename);  // use move for move image in public/images
        $data->image = $filename;

        $data->save();
        return redirect('/add_techer');

    }

    /**
     * Display the specified resource.
     */
    public function show(techer $techer)
    {
        $data=techer::all();
        return view('admin.manage_teacher',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(techer $techer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, techer $techer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(techer $techer,$id)
    {
        $data=techer::find($id)->delete();
        Alert::success('Delete Success', "techer  Delete Successful");
        return redirect('/manage_teacher');
    }
}
