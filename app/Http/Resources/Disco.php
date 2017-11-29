<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Disco extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'nombre'=>$this->nombre,
            'precio'=>$this->precio,
            'existenia'=>$this->existenia,
            'year'=>$this->year,
            'band'=>$this->band,
            'idgenero'=>$this->idgenero,
        ];
    }
}
