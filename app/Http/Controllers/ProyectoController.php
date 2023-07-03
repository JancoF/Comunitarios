<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    //metodo pra mostrar pagian principal
    public function index() {
        return view("index");
    }

    //metodo para crear proyectos
    public function create() {
        return view("create");
    }

    public function fondos (){
        return view("fondos");
    }

    public function hacemos (){
        return view("hacemos");
    }
    public function conocenos (){
        return view("conocenos");
    }

    public function somos (){
        return view("somos");
    }

} 