<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Cache\LuaScripts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Mail;
use App\Mail\welcomemail;



class UserController extends Controller
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
        $data=user::where('email',$request->email)->first();

        if($data)
        {
            if(Hash::check($request->password ,$data->password))
            {
                session()->put('uname',$data->name);
                session()->put('uid',$data->id);
                
                Alert::success('login Sucess',"user login sucessfull");
                return redirect('/');
            }
            else
            {
                Alert::error('login failed',"Password doesn't match");
                return redirect('/login');
            }
        }
        else
        {
            Alert::error('login failed',"Email doesn't exist");
            return redirect('/login');
        }
        

    }

    public function user_logout()
    {
        session()->pull ('uname');
        session()->pull ('uid');

        Alert::success('logout sucess',"logout sucessfull");
        return redirect('/');

    }

    
    public function user_profile()
    {
        $data=user::where('id',session()->get('uid'))->first();
        return view('website.user_profile',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|max:12',
            'gender' => ['required', 'in:Male,Female'],
           // 'img' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);
        
        $data = new user;
        $data->name = $request->name;
        $email=$data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->gen = $request->gender;
        $data->lang = implode(",", $request->lag);

        $file = $request->file('image');
        $filename = time() . '_image.' . $request->file('image')->getClientOriginalExtension();
        $file->move('website/upload/users/', $filename);  // use move for move image in public/images
        $data->image = $filename;

        $data->save();
        $mail=array('name'=>$request->name);
        Mail::to($email)->send(new welcomemail($mail));
        Alert::success('signup sucess',"Signup sucessfull");

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user,$id)
    {
        $data=user::find($id);
        return view('website.user_edit',['$data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user,$id)
    {
        $data = user::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->gen = $request->gender;
        $data->lang = implode(",", $request->lag);

        if($request->hasFile('img'))
        {
            unlink('website/upload/users/'.$data->img);
            $file=$request->file('img');		
            $filename=time().'_img.'.$request->file('img')->getClientOriginalExtension();
            $file->move('website/upload/users/',$filename);  // use move for move image in public/images
            $data->img=$filename;
        }

        $data->update();

        Alert::success('updated',"update sucessfull");
        return redirect('/user_profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
