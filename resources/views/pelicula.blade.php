@extends('dashboard')
@section('content')
    <div style="text-align: center;">
        <h3>CRUD Pelicula</h3>
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
                        <th>Director</th>
                        <th>ID Genero</th>
                        <th>
                            <a href="{{URL('pelicula/create')}}" class="btn btn-success btn-xs">Nuevo</a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key => $pelicula)
                        <tr>
                            <td>{{$pelicula->id}}</td>
                            <td>{{$pelicula->nombre}}</td>
                            <td>{{$pelicula->precio}}</td>
                            <td>{{$pelicula->existencia}}</td>
                            <td>{{$pelicula->year}}</td>
                            <td>{{$pelicula->director}}</td>
                            <td>{{$pelicula->idgenero}}</td>
                            <td>
                                <a href="{{URL('pelicula/'.$pelicula->id.'/edit')}}" class="btn btn-xs btn-info">Editar</a>
                            </td>
                            <td>
                                <form action="{{URL('pelicula/'.$pelicula->id)}}" method="POST">
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
