<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=product::all();
        return view('website.add_product',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pro_name'=> 'Required' ,
            'pro_price'=> 'Required',
            'pro_image'=> 'Required|image'
        ]);

        $data=new product;
        $data->pro_name = $request->pro_name;
        $data->pro_price = $request->pro_price;
       
        $file = $request->file('pro_image');
        $filename = time() . '_image.' . $request->file('pro_image')->getClientOriginalExtension();
        $file->move('website/upload/product/', $filename);
        $data->pro_image =$filename;

        $data->save();

        return redirect ('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        $data=product::all();
        return view('website.manage_product',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product,$id)
    {
        $data=$product::find($id);
        return view('website.edit_product',['d'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product,$id)
    {
        $data=product::find($id);
        $data->pro_name=$request->pro_name;
        $data->pro_price=$request->pro_price;

        if($request->hasFile('pro_image'))
        {
            
            $file=$request->file('pro_image');		
            $filename=time().'_img.'.$request->file('pro_image')->getClientOriginalExtension();
            $file->move('website/upload/product/',$filename); 
            $data->pro_image=$filename;

        }

        $data->update();
        return redirect('/manage_product');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product,$id)
    {
        $data=$product::find($id)->delete();
        return redirect('/');
    }
}
