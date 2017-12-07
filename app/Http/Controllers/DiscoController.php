<?php

namespace App\Http\Controllers;

use App\Disco;
use Illuminate\Http\Request;

class DiscoController extends Controller
{
    //
    public function show()
    {
        return Disco::all();
    }
    public function index()
    {
        $data['disco']=Disco::all();
        return view('disco',$data);
    }

    public function store(Request $request)
    {
        $disco = [
            'nombre'=>$request->nombre,
            'precio'=>$request->precio,
            'existenia'=>$request->existenia,
            'year'=>$request->year,
            'band'=>$request->band,
            'idgenero'=>$request->idgenero,
        ];

        $save = Disco::insert($disco);
        if($save)
            return redirect('disco');
        else
            return redirect()->back()->withInput();
    }

    public function edit($id)
    {
        $data['disco'] = Disco::find($id);
        return view('createdisco',$data);
    }

    public function update(Request $request, $id)
    {
        $disco = [
            'nombre'=>$request->nombre,
            'precio'=>$request->precio,
            'existenia'=>$request->existenia,
            'year'=>$request->year,
            'band'=>$request->band,
            'idgenero'=>$request->idgenero,
        ];

        $update = Disco::find($id)->update($disco);
        if($update)
            return redirect('disco');
        else
            return redirect()->back()->withInput();
    }

    public function destroy($id)
    {
        $disco = Disco::find($id);
        if($disco){
            $disco->destroy($id);
            $msg = 'Disco Eliminado';

        }
        else{
            $msg = 'Disco no Eliminado';
        }
        return redirect()->back()->withSuccess($msg);
    }
}
