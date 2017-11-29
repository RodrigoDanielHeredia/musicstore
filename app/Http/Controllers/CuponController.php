<?php

namespace App\Http\Controllers;

use App\Cupon;
use App\Http\Resources\Cupon as CuponResource;

class CuponController extends Controller
{
    //
    public function show()
    {
        return Cupon::All();
    }
}
