@extends('dashboard')
@section('content')
    <div style="text-align: center;">
        <h3>CRUD Productos</h3>
    </div>
    @if(Session::has('success'))
        <h3>{{Session::get('success')}}</h3>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-holder table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Existencia</th>
                            <th>
                                <a href="{{URL('producto/create')}}" class="btn btn-success btn-xs">Nuevo</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $producto)
                            <tr>
                                <td>{{$producto->id}}</td>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->precio}}</td>
                                <td>{{$producto->existencia}}</td>
                                <td>
                                    <a href="{{URL('producto/'.$producto->id.'/edit')}}" class="btn btn-xs btn-info">Editar</a>
                                </td>
                                <td>
                                    <form action="{{URL('producto/'.$producto->id)}}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button  type="submit" class="btn btn-xs btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
