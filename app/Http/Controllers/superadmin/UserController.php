<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', '<>', 'student')->get();
        return view('superadmin.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usr = new User;
        $usr->firstname=request('firstname');
        $usr->lastname=request('lastname');
        $usr->email=request('email');
        $usr->role=request('role');
        if(request('password')!=NULL){
            $usr->password=Hash::make(request('password'));
        }
        $usr->is_active=1;
        $usr->save();
        return back()->with('success','User Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        $usr=User::find($user);
        return view('superadmin.edituser', compact('usr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($user)
    {
        $usr=User::find($user);
        $usr->firstname=request('firstname');
        $usr->lastname=request('lastname');
        $usr->email=request('email');
        $usr->role=request('role');
        if(request('password')!=NULL){
            $usr->password=Hash::make(request('password'));
        }
        $usr->is_active=request('is_active');
        $usr->save();
        return redirect('/superadmin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
