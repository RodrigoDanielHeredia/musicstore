<?php

namespace App\Http\Controllers;

use App\Pelicula;;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    //
    public function show()
    {
        return Pelicula::All();
    }

    public function index()
    {
        $data['pelicula']=Pelicula::all();
        return view('pelicula',$data);
    }

    public function store(Request $request)
    {
        $pelicula = [
            'nombre'=>$request->nombre,
            'precio'=>$request->precio,
            'existenia'=>$request->existenia,
            'year'=>$request->year,
            'band'=>$request->band,
            'director'=>$request->director,
            'idgenero'=>$request->idgenero,
        ];

        $save = Pelicula::insert($pelicula);
        if($save)
            return redirect('pelicula');
        else
            return redirect()->back()->withInput();
    }

    public function edit($id)
    {
        $data['pelicula'] = Pelicula::find($id);
        return view('createpelicula',$data);
    }

    public function update(Request $request, $id)
    {
        $pelicula = [
            'nombre'=>$request->nombre,
            'precio'=>$request->precio,
            'existenia'=>$request->existenia,
            'year'=>$request->year,
            'band'=>$request->band,
            'director'=>$request->director,
            'idgenero'=>$request->idgenero,
        ];

        $update = Pelicula::find($id)->update($pelicula);
        if($update)
            return redirect('pelicula');
        else
            return redirect()->back()->withInput();
    }

    public function destroy($id)
    {
        $pelicula = Pelicula::find($id);
        if($pelicula){
            $pelicula->destroy($id);
            $msg = 'Pelicula Eliminado';

        }
        else{
            $msg = 'Pelicula no Eliminado';
        }
        return redirect()->back()->withSuccess($msg);
    }
}
