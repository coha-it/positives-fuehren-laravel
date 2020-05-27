<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageCtrl extends Controller
{
    public function welcome () {
        return view('welcome');
    }
    public function impressum () {
        return view('impressum');
    }
}
