<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;


class userscontroller extends Controller
{
    public function users(){
        $users = users::all();

        return view('dashboard.users', ['users' => $users]);
    }
}