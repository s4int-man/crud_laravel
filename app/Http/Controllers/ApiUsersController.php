<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ApiUsersController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('role');
    }

    public function index(){
        return App\User::all();
    }

    public function show(App\User $user){
        return $user;
    }

    public function store(Request $request){
        $user = App\User::create($request->all());
        return response()->json($user, 201);
    }

    public function update(Request $request, App\User $user){
        $user->update($request->all());
        return response()->json($user, 200);
    }

    public function delete(App\User $user){
        $user->delete();
        return response()->json(null, 204);
    }
}
