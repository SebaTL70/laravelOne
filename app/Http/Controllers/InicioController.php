<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class InicioController extends Controller{

    public function iniciar (){
        $mensaje = "Hola Hermoso Mundo";
        $dias=array("Lunes","Martes","Miercoles","Jueves","Viernes");
        return view('inicio',compact(['mensaje','dias']));
    }
}
