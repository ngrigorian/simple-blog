<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecoverController extends Controller
{
    public function create(){
        return view('recover.recover');
    }
}
