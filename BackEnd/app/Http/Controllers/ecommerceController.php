<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ecommerceController extends Controller
{
    public function viewEcommerce(request $REQUEST){
        return view('ecommerce');
    }
}
