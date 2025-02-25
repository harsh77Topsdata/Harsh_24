<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.add_book');
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
        $data=new book;
        echo $request->book_name;
        $data->book_name=$request->book_name;
        $data->subject=$request->subject;
        $data->description=$request->description;

        $data->save();
        return redirect('/add_book');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        $data=book::all();
        return view('admin.manage_book',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book,$id)
    {
        $data=book::find($id)->delete();
        Alert::success('Delete Success', "Book Delete Successful");
        return redirect('/manage_book');
    }
}
