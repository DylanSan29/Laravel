<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Usuarios';
    }

    public function mostrar($id)
    {
        return "Usuario {$id}";
    }

    public function crear()
    {
        return "Usuario nuevo";
    }

    public function mostrar_nombre_nickname($name, $nickname) 
    {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    }
}
