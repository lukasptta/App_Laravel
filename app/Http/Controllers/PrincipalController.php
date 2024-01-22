<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function Principal(){ //metodos ou action
        return view('site.principal');
    }
}
