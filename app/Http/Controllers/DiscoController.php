<?php

namespace App\Http\Controllers;

use App\Disco;
use App\Http\Resources\Disco as DiscoResource;

class DiscoController extends Controller
{
    //
    public function show($id)
    {
        return new DiscoResource(Disco::find($id));
    }
}
