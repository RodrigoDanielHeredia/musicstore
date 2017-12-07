@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{URL('disco')}}{{isset($data) ? '/' . $data->id : ''}}" method="POST">
                <div class="form-group">
                    {{ csrf_field() }}
                    @if(isset($data))
                        {{method_field('PUT')}}
                    @endif
                    <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{isset($data) ? $data->nombre : ''}}">
                    <input type="number" name="precio" placeholder="Precio" class="form-control"value="{{isset($data) ? $data->precio : ''}}">
                    <input type="number" name="existencia" placeholder="Existencia" class="form-control" value="{{isset($data) ? $data->existencia : ''}}">
                    <input type="number" name="year" placeholder="Year" class="form-control" value="{{isset($data) ? $data->year : ''}}">
                    <input type="text" name="band" placeholder="Band" class="form-control" value="{{isset($data) ? $data->band : ''}}">
                    <input type="number" name="idgenero" placeholder="IDGenero" class="form-control" value="{{isset($data) ? $data->idgenero : ''}}">
                    <button type="submit" class="btn btn-sm btn-success">Agregar</button>
                </div>
            </form>
        </div>
    </div>
@endsection