<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    // Menampilkan View dari Controller
    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Irsyad']);
    // }

    // Meneruskan data ke view
    public function greeting(){
        return view('blog.hello')
            ->with('name','IrsyadS')
            ->with('occupation','Astronaut');
    }
}
