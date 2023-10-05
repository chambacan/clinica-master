<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getuser()
    {
        $users = DB::table('users')->get();

        // dd('users');
        return view('users.getusers', compact('users'));
    }
}
