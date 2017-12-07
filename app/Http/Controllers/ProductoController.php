<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function show()
    {
        return Producto::all();
    }

    public function index()
    {
        $data['producto']=Producto::all();
        return view('producto',$data);
    }

    public function store(Request $request)
    {
        $producto = [
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'existencia' => $request->existencia
        ];

        $save = Producto::insert($producto);
        if($save)
            return redirect('producto');
        else
            return redirect()->back()->withInput();
    }

    public function edit($id)
    {
        $data['producto'] = Producto::find($id);
        return view('createproducto',$data);
    }

    public function update(Request $request, $id)
    {
        $producto = [
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'existencia' => $request->existencia
        ];

        $update = Producto::find($id)->update($producto);
        if($update)
            return redirect('producto');
        else
            return redirect()->back()->withInput();
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        if($producto){
            $producto->destroy($id);
            $msg = 'Producto Eliminado';

        }
        else{
            $msg = 'Producto no Eliminado';
        }
        return redirect()->back()->withSuccess($msg);
    }
}
