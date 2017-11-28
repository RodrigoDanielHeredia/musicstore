<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Pelicula extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'nombre'=>$this->nombre,
            'precio'=>$this->precio,
            'existenia'=>$this->existenia,
            'portada'=>$this->portada,
            'year'=>$this->year,
            'director'=>$this->director,
            'idgenero'=>$this->idgenero,
        ];
    }
}
