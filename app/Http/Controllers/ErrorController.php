<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function create(){
        $errorMessage = "Oops! Something went wrong.";

        return view('error.error', compact('errorMessage'));
    }
}
