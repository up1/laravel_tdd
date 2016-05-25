<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    function show($name) {
        $user = User::findByName($name);
        return view('users.show', ['user' => $user]);
    }
}
