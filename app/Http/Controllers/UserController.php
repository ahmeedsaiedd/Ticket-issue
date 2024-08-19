<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user.create'); // Make sure this Blade file exists
    }

    /**
     * Display a listing of all users.
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        return view('user.list'); // Make sure this Blade file exists
    }
}

