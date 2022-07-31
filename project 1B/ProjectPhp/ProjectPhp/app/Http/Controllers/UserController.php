<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller{
    
    function list()
    {
        $users = User::paginate(2);
        return view('pages.users.list',  ['users' => $users]);
    }
}