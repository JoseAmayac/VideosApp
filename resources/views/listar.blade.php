@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($videos-> isEmpty())
            <div>No hay videos </div>
        @else
        <div class="row">
        @foreach ($videos as $video)
        
            <div class="col-md-3">
                <div class="card m-2 tamCard">
                    <div class="card-header bg-info cabeCard d-flex justify-content-center" >
                        <h3 class="card-title text-center text-dark font-weight-bold d-inline">{{$video->nombre}}</h3>
                        <a href="#" class="ml-auto"><i class="fa fa-trash-o enlaceEliminar"></i></a>
                    </div>
                    <div class="card-body">
                        <h4> {{ $video->descripcion }} </h4>  
                    </div>
                    <div class="card-footer text-muted">
                        <p class="d-inline">{{ $video->users_email }}</p> - <p class="mr-auto d-inline">{{ $video->duracion }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
        @endif
    </div>
@endsection