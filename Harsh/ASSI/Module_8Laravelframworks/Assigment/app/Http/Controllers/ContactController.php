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
        //
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
        $insert=new contact;
        $insert->name=$request->name;
        $insert->email=$request->email;
        $insert->phone=$request->phone;
        $insert->subject=$request->subject;
        $insert->message=$request->message;

        $insert->save();
        Alert::success('Contact Submit','You Enquiry Submited');
        return redirect('/Contact');

    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
        return view('website.contact');
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
    public function destroy(contact $contact)
    {
        //
    }
}
