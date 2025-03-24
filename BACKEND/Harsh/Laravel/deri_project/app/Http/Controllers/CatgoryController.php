<?php

namespace App\Http\Controllers;

use App\Models\catgory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatgoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=catgory::All();
        return view('/website.catgories', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.add_catgories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cat_name' => 'required|max:255',
            'cat_img' => 'required|image'
        ]);

        $data=new catgory;
        $data->cat_name = $request->cat_name;
        
        $file=$request->file('cat_img');		
        $filename=time().'_img.'.$request->file('cat_img')->getClientOriginalExtension();
        $file->move('admin/upload/catgory/',$filename);  
        $data->cat_img=$filename;

        
        $data->save();

        return redirect('/add_catgories');

    }

    /**
     * Display the specified resource.
     */
    public function show(catgory $catgory)
    {
        $data=catgory::all();
        return view('admin.manage_catgories',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(catgory $catgory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, catgory $catgory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(catgory $catgory,$id)
    {
        $data=catgory::find($id)->delete();
        return redirect('/manage_catgories');

    }
}
