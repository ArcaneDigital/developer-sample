<?php

namespace App\Http\Controllers;

class ViewRegistration extends Controller
{
    public function __invoke()
    {
        return view('register');
    }
}
