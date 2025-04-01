<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view("home",["titulo"=>"Wiki"]);
    }
    public function minecraft(){
        return view("minecraft",["titulo"=>"Minecraft"]);
    }
    public function movie(){
        return view("movie",["titulo"=>"Movie"]);
    }
    public function dungeons(){
        return view("dungeons",["titulo"=>"Dungeons"]);
    }
    public function legends(){
        return view("legends",["titulo"=>"Legends"]);
    }
}
