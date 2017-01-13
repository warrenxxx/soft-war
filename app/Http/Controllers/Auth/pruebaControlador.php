<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class pruebaControlador extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return Response
     */
    public function index()
    {
       return "Hola desde Controlador";
    }
}
