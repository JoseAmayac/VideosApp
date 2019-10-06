@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($videos-> isEmpty())
            <div>No hay videos </div>
        @else
        <div class="row">
        @foreach ($videos as $video)
        
            <div class="col-md-4">
                <div class="card m-2">
                    <div class="card-header bg-info" >
                        <h3 class="card-title text-center">{{$video->nombre}}</h3>
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