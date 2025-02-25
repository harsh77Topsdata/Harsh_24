<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('website.login');
    }

    public function user_auth(Request $request)
    {
       $data=student::where('email',$request->username)->first();
       if($data)
       {
            if(Hash::check($request->password,$data->password))
            {
                session()->put('uname',$data->email);
                session()->put('uid',$data->id);
                Alert::success('Login Success', "User Login Successful");
                return redirect('/');
            }
            else
            {
                Alert::error('Login Failed', "Password Doesn't Not Match");
                return redirect('/login');
            }
       }
       else
       {
            Alert::error('Login Failed', "Email Doesn't Exist");
            return redirect('/login');
       }
    }

    public function student_logout(){
        session()->pull('uname');
        session()->pull('uid');
        Alert::success('Logout Success', "User Logout Successful");
        return redirect('/');
    }

    public function student_profile(){
        $data=student::where('id',session()->get('uid'))->first();
        return view('website.student_profile',['data'=>$data]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/website.signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new student;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->lang = implode(",", $request->lang);
        $data->gen=$request->gen;
        
        // img upload
        $file = $request->file('image');
        $filename = time() . '_image.' . $request->file('image')->getClientOriginalExtension();
        $file->move('website/upload/users/', $filename);  // use move for move image in public/images
        $data->image = $filename;

        $data->save();

    }

    
    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        $data=student::all();
        return view('/admin.manage_student',['data'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student, $id)
    {
        $data=student::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->gen=$request->gen;

        if($request->hasFile('img')) 
        {
            unlink('website/upload/users/'.$data->image);
            $file=$request->file('img');		
            $filename=time().'_img.'.$request->file('img')->getClientOriginalExtension();
            $file->move('website/upload/users/',$filename);  // use move for move image in public/images
            $data->image=$filename;
        }
        $data->update();
        Alert::success('Update Success', "student Update Successful");
        return redirect('/student_profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student,$id)
    {
        $data=student::find($id)->delete();
        Alert::success('Delete Success', "student Delete Successful");
        return redirect('/manage_student');
    }
}
