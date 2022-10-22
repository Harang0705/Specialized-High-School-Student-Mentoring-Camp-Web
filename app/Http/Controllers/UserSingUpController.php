<?php

namespace App\Http\Controllers;

use App\Models\UserSingUp;
use Illuminate\Http\Request;

class UserSingUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('singUp/index');
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
     * @param  \App\Http\Requests\StoreUserSingUpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dump($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserSingUp  $userSingUp
     * @return \Illuminate\Http\Response
     */
    public function show(Request $userSingUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserSingUp  $userSingUp
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $userSingUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserSingUpRequest  $request
     * @param  \App\Models\UserSingUp  $userSingUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserSingUp $userSingUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserSingUp  $userSingUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $userImformation)
    {
        //
    }
}
