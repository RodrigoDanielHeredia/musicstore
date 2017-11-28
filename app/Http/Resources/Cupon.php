<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Cupon extends Resource
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
            'idcupon'=>$this->idcupon,
            'idproducto'=>$this->idproducto,
            'descuento'=>$this->descuento,
        ];
    }
}
