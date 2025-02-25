<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.add_department');
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
        $data=new department;
        $data->dept_name=$request->dept_name;
        $data->head_name=$request->head_name;

        $data->save();
        return redirect('/add_department');

    }

    /**
     * Display the specified resource.
     */
    public function show(department $department)
    {
        $data=department::all();
        return view('admin.manage_department',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(department $department,$id)
    {
        $data=department::find($id)->delete();
        Alert::success('Delete Success', "Department Delete Successful");
        return redirect('/manage_department');
    }
}
