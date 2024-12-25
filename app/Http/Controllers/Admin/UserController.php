<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
     public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(15);
        return view('admin.users.index', compact('users'));
    }
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users =User::all();
        return view('admin.users.create',compact ('users'));
        
    }
     /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
       // dd($request);
       $users=User::create($request->all());
       {
        
        //file upload
        $file_name = time().'.'.$request->profile->extension();//12341234.png

        $upload = $request->profile->move(public_path('images/users/'),$file_name); //upload to folder
        if($upload){
            $users->profile = "/images/users/".$file_name; //upload to database
        }
        // $user->id =Auth::id();
       $users->save();
       return redirect()->route('backend.users.index');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        $users = User::all();
        return view('admin.users.edit',compact('user','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, string $id)
    {
        // echo $id;
        // dd($request);
        $user=User::find($id);
        $user->update($request->all());
        if($request->hasFile('profile')){
        //file upload
        $file_name = time().'.'.$request->profile->extension();//12341234.png

        $upload = $request->profile->move(public_path('profiles/users/'),$file_name); //upload to folder
        if($upload){
            $user->profile = "/profiles/users/".$file_name; //upload to database
        }
        }else{
            $user->profile=$request->old_profile;
        }


        $user->save();
        return redirect()->route('backend.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // echo "<h1>$id<h1>";
        $user = User::find($id);
        $user->delete();
        return redirect()->route('backend.users.index');
    }
}
