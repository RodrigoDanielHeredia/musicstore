@extends('dashboard')
@section('content')
    <div style="text-align: center;">
        <h3>CRUD Discos</h3>
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
                        <th>Año</th>
                        <th>Banda</th>
                        <th>ID Genero</th>
                        <th>
                            <a href="{{URL('disco/create')}}" class="btn btn-success btn-xs">Nuevo</a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key => $disco)
                        <tr>
                            <td>{{$disco->id}}</td>
                            <td>{{$disco->nombre}}</td>
                            <td>{{$disco->precio}}</td>
                            <td>{{$disco->existencia}}</td>
                            <td>{{$disco->year}}</td>
                            <td>{{$disco->band}}</td>
                            <td>{{$disco->idgenero}}</td>
                            <td>
                                <a href="{{URL('disco/'.$disco->id.'/edit')}}" class="btn btn-xs btn-info">Editar</a>
                            </td>
                            <td>
                                <form action="{{URL('disco/'.$disco->id)}}" method="POST">
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
