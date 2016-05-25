<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    function show($name) {
        $user = User::where('name', $name)->first();
        return view('users.show', ['user' => $user]);
    }
}
