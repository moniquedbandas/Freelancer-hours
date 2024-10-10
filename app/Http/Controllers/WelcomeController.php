<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        // $user = User::query()->create([
        //     'name' => 'Monique',
        //     'email' => 'mdb@gmail.com',
        //     'password' => 'carol',
        // ]);


        // dd($user);
        //__invoke quer dizer que terá somente uma função!
        return view('welcome');
    }
}
