@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{URL('productos')}}" class="btn btn-sm btn-primary">Productos</a>
                    <a href="{{URL('discos')}}" class="btn btn-sm btn-primary">Discos</a>
                    <a href="{{URL('peliculas')}}" class="btn btn-sm btn-primary">Peliculas</a>
                    <a href="{{URL('generos')}}" class="btn btn-sm btn-primary">Generos</a>
                    <a href="{{URL('cupones')}}" class="btn btn-sm btn-primary">Cupones</a>
                    <a href="{{URL('usuarios')}}" class="btn btn-sm btn-primary">Usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
