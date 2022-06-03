<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function createUser (Request $request)
    { dd($request);
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
}
