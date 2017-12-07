<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cupon;

class CuponController extends Controller
{
    //
    public function show()
    {
        return Cupon::All();
    }

    public function index()
    {
        $data['cupon']=Cupon::all();
        return view('cupon',$data);
    }

    public function store(Request $request)
    {
        $cupon = [
            'nombre' => $request->nombre,
            'descuento' => $request->descuento
        ];

        $save = Cupon::insert($cupon);
        if($save)
            return redirect('cupones');
        else
            return redirect()->back()->withInput();
    }

    public function edit($id)
    {
        $data['cupon'] = Cupon::find($id);
        return view('createcupon',$data);
    }

    public function update(Request $request, $id)
    {
        $cupon = [
            'nombre' => $request->nombre,
            'descuento' => $request->descuento
        ];

        $update = Cupon::find($id)->update($cupon);
        if($update)
            return redirect('cupones');
        else
            return redirect()->back()->withInput();
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $producto = Cupon::find($id);
        if($producto){
            $producto->destroy($id);
            $msg = 'Cupon Eliminado';

        }
        else{
            $msg = 'Cupon no Eliminado';
        }
        return redirect()->back()->withSuccess($msg);
    }
}
