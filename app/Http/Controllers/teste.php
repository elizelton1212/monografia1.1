<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teste extends Controller
{
    //

    public function admin()
    {
        # code...
        return view('admin');
    }

    public function teste2()
    {
        # code...
        return view('roque');
    }
}
