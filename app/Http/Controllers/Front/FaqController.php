<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function index(){
        return view('Front.faq');
    }
}
