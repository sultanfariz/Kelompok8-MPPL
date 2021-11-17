<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        return redirect('/home');
    }

    /**
     * Sign up a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup()
    {
        return redirect('/signup');
    }

    /**
     * Sign in a user.
     *
     * @return \Illuminate\Http\Response
     */
    public function signin()
    {
        return redirect('/signin');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        
        return User::create([
            'fullname' => $validatedData['fullname'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
        // $user = new User();
        // $user->title = $validatedData['title'];
        // $user->body = $validatedData['body'];
        // $user->language = $validatedData['language'];

        // $user->save();

        return redirect('/home')->with('success', 'User has been registered');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Admin  $admin
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Admin $admin)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Admin  $admin
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Admin $admin)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Admin  $admin
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Admin $admin)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Admin  $admin
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Admin $admin)
    // {
    //     //
    // }
}
