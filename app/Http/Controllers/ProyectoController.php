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
        return view("crete");
    }

    public function fondos (){
        return view("fondos");
    }


} 