<?php

namespace App\Http\Controllers;

use App\Models\catgory;
use App\Models\user;
use App\Models\blog;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=blog::join('catgories','catgories.id','=','blogs.cat_id')
        ->join('users','users.id','=','blogs.user_id')
        ->where('blogs.status','published')->get(['blogs.*','catgories.cat_name','users.name']);
        return view('website.home',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data=catgory::all();
        return view('website.blog_create',['data'=>$data]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required|unique:blogs',
            'content' => 'required',
            'blog_image'=>'required|image'
        ]);

       
        $insert=new blog;
        $insert->cat_id=$request->catgory;
        $insert->user_id=session('uid');
        $insert->title=$request->title;
        $insert->content=$request->content;
        
          // img upload
          $file=$request->file('blog_image');		
          $filename=time().'_img.'.$request->file('blog_image')->getClientOriginalExtension();
          $file->move('website/upload/blog/',$filename);  // use move for move image in public/images
         
          $insert->blog_image=$filename;
          $insert->save();
          Alert::success('Blog Create','Blog Create Successfully');
          return redirect('/Profile');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        //
        $data=blog::join('catgories','catgories.id','=','blogs.cat_id')
        ->join('users','users.id','=','blogs.user_id')
        ->where('blogs.status','published')->get(['blogs.*','catgories.cat_name','users.name']);
        return view('website.blog',['data'=>$data]);
    }
    public function view(blog $blog,$title)
    {
        $blog_title=$title;
      //
        $data=blog::join('catgories','catgories.id','=','blogs.cat_id')
        ->join('users','users.id','=','blogs.user_id')
        ->where('title',$blog_title)->first(['blogs.*','catgories.cat_name','users.name']);
        return view('website.single_blog',['data'=>$data]);
    }

    public function publish($id)
    {
        //
        $data=blog::find($id);
        if($data->status=='draft')
        {
            $data->status='published';
            $data->update();
            alert::success('Publish Success','Your blog Publish Successfully');
            return redirect('/Profile');
        }
        else
        {
            alert::error('blog Published','blog is already publish');
            return redirect('/Profile');
        }
        //return view('website.blog',['data'=>$data]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog,$id)
    {
        //
        
        $data=blog::find($id);
        $c_id=$data->cat_id;
        $data1=catgory::find($c_id);
        return view('website.edit',['data'=>$data],['cat'=>$data1]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog,$id)
    {
        //
        $data=blog::find($id);
       
        $data->title=$request->title;
        $data->content=$request->content;
        
          // img upload
          if($request->hasFile('blog_image')) 
          {
            unlink('website/upload/blog/'.$data->blog_image);
            $file=$request->file('blog_image');		
            $filename=time().'_img.'.$request->file('blog_image')->getClientOriginalExtension();
            $file->move('website/upload/blog/',$filename);  // use move for move image in public/images
            
            $data->blog_image=$filename;
          }
          $data->update();
          Alert::success('Blog Update','Blog Update Successfully');
          return redirect('/Profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog,$id)
    {
        //Delete Record/blog
        $data=blog::find($id)->delete();
        if($data)
        {
            alert::success('blog Delete','Your blog Delete Successfull');
            return redirect('/Profile');
        }
    }
}