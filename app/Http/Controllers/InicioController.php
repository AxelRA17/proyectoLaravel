<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view("home");
    }
    public function vista1(){
        return view("vista1");
    }
    public function vista2(){
        return view("vista2");
    }
    public function vista3(){
        return view("vista3");
    }
    public function vistaTarea(){
        return view("vistaTarea");
    }
}
