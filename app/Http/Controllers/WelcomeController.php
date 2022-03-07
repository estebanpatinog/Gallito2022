<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $users = User::all();
        return view('welcome', compact('users'));
    }

    public function ver(User $user){
        $posts = $user->posts()
                ->orderBy('created_at', 'desc')
                ->simplepaginate(3);
        return view('allusers.index', compact('posts', 'user'));
    }
}
