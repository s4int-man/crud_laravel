<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role');
    }

    public function index(){
        $users = App\User::all();
        return view('users', compact('users'));
    }

    public function getUser($id){
        $user = App\User::find($id);
        return view('user', compact('user'));
    }
}
