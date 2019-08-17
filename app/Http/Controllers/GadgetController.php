<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GadgetController extends Controller
{
    public function spot(){
    	return view('gadget.spot');
    }

    public function spot1(){
    	return view('layouts.app1');
    }  

    public function qr_code(){
    	return view('gadget.qr_code');
    }  
}
