@extends('layouts.app')

@section('content')
<div class="container">
    @if (Session::has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        @if ($videos-> isEmpty())
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="">
                    <h1 class="text-center">No hay videos publicados</h1>
                </div>
            </div>
        @else
        @foreach ($videos as $video)
        
            <div class="col-md-3 mb-4 bt-3">
                <div class="card tamCard">
                    <div class="card-header bg-info cabeCard d-flex justify-content-center" >
                        <h3 class="card-title text-center text-dark font-weight-bold d-inline">{{$video->nombre}}</h3>
                        <div class="d-flex ml-auto">
                            <form action="{{ url('/delete', ['id' => $video->id]) }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-lg"><i class="fa fa-trash-o enlaceEliminar"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4> {{ $video->descripcion }} </h4>  
                        <input type="hidden" value=" {{$video->id}} " name="id_video_eliminar" id="id_video">
                        <p>Subido por:  {{ $video->users->name}} </p>
                        {{$video->categorias->descripcion }}
                    </div>
                    <div class="d-flex card-footer text-muted">
                        <div class="mr-auto">
                            {{ $video->duracion }}
                        </div>
                        <div class="ml-auto">
                            {{$video->numero_vistas}} vistas
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
    </div>
    </div>
@endsection