@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{URL('cupon')}}{{isset($data) ? '/' . $data->id : ''}}" method="POST">
                <div class="form-group">
                    {{ csrf_field() }}
                    @if(isset($data))
                        {{method_field('PUT')}}
                    @endif
                    <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{isset($data) ? $data->nombre : ''}}">
                    <input type="number" name="descuento" placeholder="Descuento" class="form-control"value="{{isset($data) ? $data->descuento : ''}}">
                    <button type="submit" class="btn btn-sm btn-success">Agregar</button>
                </div>
            </form>
        </div>
    </div>
@endsection