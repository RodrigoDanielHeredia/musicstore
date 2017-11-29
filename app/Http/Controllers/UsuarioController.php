<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Http\Resources\Usuario as UsuarioResource;

class UsuarioController extends Controller
{
    //
    public function show()
    {
        return Usuario::All();
    }
}
