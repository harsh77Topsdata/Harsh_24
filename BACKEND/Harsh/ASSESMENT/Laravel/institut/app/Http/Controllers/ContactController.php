<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/website.contact');
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
        $data=new contact();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;

        $data->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        $data=contact::all();
        return view('admin.manage_contact',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact,$id)
    {
        $data=contact::find($id)->delete();
        Alert::success('Delete Success', "Contact Delete Successful");
        return redirect('/manage_contact');
    }
}
