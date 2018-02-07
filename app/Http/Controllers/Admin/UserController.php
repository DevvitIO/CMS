<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

	 /**
     * Returns all users
     *
     * @return \Illuminate\View\View
     */
	public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users') );
    }

}
