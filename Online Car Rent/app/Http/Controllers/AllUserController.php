<?php

namespace App\Http\Controllers;

use App\All_User;
use Illuminate\Http\Request;

class AllUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $all_User = new All_User();
        $all_User->name = request('name');
        $all_User->email = request('email');
        $all_User->password = request('password');
        $all_User->phone = request('phone');
        $all_User->user_type = request('user_type');
        $all_User->save();

        \redirect('/login');
        
    }

    public function showLoginPage()
    {
        view('user.login');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\All_User  $all_User
     * @return \Illuminate\Http\Response
     */
    public function show(All_User $all_User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\All_User  $all_User
     * @return \Illuminate\Http\Response
     */
    public function edit(All_User $all_User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\All_User  $all_User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, All_User $all_User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\All_User  $all_User
     * @return \Illuminate\Http\Response
     */
    public function destroy(All_User $all_User)
    {
        //
    }
}
