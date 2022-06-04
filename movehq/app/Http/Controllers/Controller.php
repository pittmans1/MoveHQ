<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function createUser (Request $request)
    { 
        return User::updateOrCreate(
            [   
                'name'=>$request->name,
                'email' => $user->email,
                'password'=>$user->password,
                'ip' => $request->ip,
                'remember_token'=>Str::random(60),
            ]
        );

    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function createPost(Request $request)
    {
        return Post::updateOrCreate([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
    }
    public function deletePost(Request $request)
    {   
       return  Post::where('id', $request->id)->delete();
    }
    public function updatePost(Request $request)
    {
        return Post::updateOrCreate([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
    }
    public function getPosts(Request $request)
    {
        return Post::all();
    }
}
