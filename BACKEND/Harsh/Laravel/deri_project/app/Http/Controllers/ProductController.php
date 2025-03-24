<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Controllers\Controller;
use App\models\catgory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data=product::where('cat_id',$id)->where('status','instock')->get();
        return view('website.product',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=catgory::all();
        return view('admin.add_product',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pro_name' => 'required|max:255',
            'pro_image' => 'required|image',
            'pro_price' => 'required',
            'qty' => 'required',
            'description' => 'required'
        ]);

        $data=new product;
        $data->cat_id = $request->cat_id;
        $data->pro_name = $request->pro_name;
        
        $file = $request->file('pro_image');
        $filename = time() . '_image.' . $request->file('pro_image')->getClientOriginalExtension();
        $file->move('admin/upload/product/', $filename);
        $data->pro_image =$filename;
        
        $data->pro_price=$request->pro_price;
        $data->qty=$request->qty;
        $data->description=$request->description;

        $data->save();

        return redirect ('add_product');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        $data=product::all();
        return view('admin.manage_product',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product ,$id)
    {
        $data=product::find($id)->delete();
        return redirect('/manage_product');
    }
}
