<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{   
    public function index()
    {
        return "Welcome to admin area";
    }



	public function __construct()
	{
	    $this->middleware('auth.admin:admin');
	}

}
