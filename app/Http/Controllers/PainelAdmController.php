<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelAdmController extends Controller
{
    public function viewPainelAdm(Request $request){
        return view('paineladm');
    }
}
