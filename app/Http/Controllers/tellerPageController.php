<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tellerPageController extends Controller
{
    public function teler_Laptop(){
        return view('pageteller/laptopteler');
    }
    public function teler_Printer(){
        return view('pageteller/printerteller');
    }
    public function teler_Gadget(){
        return view('pageteller/gadgetteller');
    }
    public function teler_CPU(){
        return view('pageteller/CPUteller');
    }
    public function getpost(){
        return view('pageteller/function');
    }

   
   
}
