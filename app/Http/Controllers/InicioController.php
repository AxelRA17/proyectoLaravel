<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view("home");
    }
    public function minecraft(){
        return view("minecraft");
    }
    public function movie(){
        return view("movie");
    }
    public function dungeons(){
        return view("dungeons");
    }
    public function legends(){
        return view("legends");
    }
}
