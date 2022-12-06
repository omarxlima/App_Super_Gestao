<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //actions ou métodos
    public function index() {
        return view('site.app.principal');
    }
}
