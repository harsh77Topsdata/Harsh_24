<?php

namespace App\Http\Controllers;

use App\Models\club;
use App\Models\student;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student=student::all();
        return view('admin.add_club',['student'=>$student]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new club;
        $data->c_name=$request->c_name;
        $data->s_detail=$request->s_detail;
        $data->c_head=$request->c_head;
        
        $data->save();
        return redirect('/add_club');
    }

    /**
     * Display the specified resource.
     */
    public function show(club $club)
    {
        $data=club::all();
        
        return view('admin.manage_club',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(club $club,$id)
    {
        $data=club::find($id)->delete();
        Alert::success('Delete Success', "Club Delete Successful");
        return redirect('/manage_club');
    }
}
