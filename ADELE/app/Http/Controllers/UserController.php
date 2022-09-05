<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function usersList(){
        $users = User::all();
        return view('user', compact('users'));
    }


    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('usersList');
    }

    public function updateUser($id){

        $user = User::findOrFail($id);
        $user->fill(request()->except(['_token', '_method', 'password']));
        $user->save();
        return redirect()->route('usersList');
    }

}
