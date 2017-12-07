<?php

namespace App\Http\Controllers;

use App\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['genero']=Genero::all();
        return view('genero',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $genero = [
            'nombre' => $request->nombre,
        ];

        $save = Genero::insert($genero);
        if($save)
            return redirect('genero');
        else
            return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Genero  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Genero $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genero  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Genero $id)
    {
        //
        $data['genero'] = Genero::find($id);
        return view('creategenero',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genero  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genero $id)
    {
        //
        $genero = [
            'nombre' => $request->nombre,
        ];

        $update = Genero::find($id)->update($genero);
        if($update)
            return redirect('genero');
        else
            return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genero  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genero $id)
    {
        //
        $genero = Genero::find($id);
        if($genero){
            $genero->destroy($id);
            $msg = 'Genero Eliminado';

        }
        else{
            $msg = 'Genero no Eliminado';
        }
        return redirect()->back()->withSuccess($msg);
    }
}
