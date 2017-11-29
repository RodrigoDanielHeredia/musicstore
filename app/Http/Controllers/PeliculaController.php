<?php

namespace App\Http\Controllers;

use App\Pelicula;
use App\Http\Resources\Pelicula as PeliculaResource;

class PeliculaController extends Controller
{
    //
    public function show()
    {
        return Pelicula::All();
    }
}
