<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {


        $hello = [
            'name' => 'budi',
            'ttl' => '02/09/2007',
            'job' => 'programmer',
        ];

        return view('home', $hello);
    }
}
