<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\post;
use App\Models\User;
use App\Models\catgory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->gen = $request->gender;
        $data->lang = implode(",", $request->lag);

        $file = $request->file('image');
        $filename = time() . '_image.' . $request->file('image')->getClientOriginalExtension();
        $file->move('website/upload/users/', $filename);  // use move for move image in public/images
        $data->image = $filename;

        $data->save();
        Alert::success('signup sucess',"Signup sucessfull");

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
        //$cust_id
        $data=user::find(session('uid'));
        
        $post=blog::join('users','users.id','=','blogs.user_id')
        ->join('catgories','catgories.id','=','blogs.cat_id')
        ->where('user_id',session('uid'))
        ->get(['blogs.*','catgories.cat_name']);
        return view('website.user_profile',['data'=>$data],['post'=>$post]);
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
       /* $data = user::find($id);
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
        return redirect('/Profile'); */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}