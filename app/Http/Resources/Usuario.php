<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Usuario extends Resource
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
            'name'=>$this->name,
            'apellido'=>$this->apellido,
            'email'=>$this->email,
            'telefono'=>$this->telefono,
            'pais'=>$this->pais,
            'dirección'=>$this->direccion,
        ];
    }
}
