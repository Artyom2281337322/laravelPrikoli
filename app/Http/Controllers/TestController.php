<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function about()
    {
        return view('about');

    }

    public function contacts()
    {
         $adress = "bimbim228";
         $data = ['name' => 'vladik', 'phone' => '89082281337', 'age' => 42];
         return view('contacts', compact('adress', 'data'));
    }
}
