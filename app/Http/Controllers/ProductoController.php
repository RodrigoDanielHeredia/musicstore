<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Http\Resources\Producto as PoductoResource;

class ProductoController extends Controller
{
    //
    public function show($id)
    {
        return new ProductoResource(Producto::find($id));
    }
}
