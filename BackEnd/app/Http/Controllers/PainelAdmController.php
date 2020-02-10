<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\produto;

class PainelAdmController extends Controller
{
    public function viewPainelAdm(Request $request){
        return view('paineladm');
    }
}
