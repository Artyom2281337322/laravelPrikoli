<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainConroller extends Controller
{
    public function ShowIndex(){
        return view('home');
    }

    public function ShowArray(){
        $arr = [
            ['id' => 1, 'title' => 'mem1', 'price' => 500, 'path' => '1.png'],
            ['id' => 2, 'title' => 'mem2', 'price' => 600, 'path' => '2.png'],
            ['id' => 3, 'title' => 'mem3', 'price' => 700, 'path' => '1.png']
        ];
        return view('home', compact('array'));
    }
}
