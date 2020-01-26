<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class computadoresController extends Controller
{
    public function viewComputadores(request $REQUEST){
        return view('computadores');
    }
}
