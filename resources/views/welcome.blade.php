@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1 class="my-4 ms-2">
    Film da vedere:
</h1>


<div class="d-flex flex-wrap">
    @foreach ($movies as $movie)
        <div class="card m-2" style="width: 18rem;">
            <img src="{{$movie->img}}" class="card-img-top" alt="{{$movie->title}}" style="max-height: 350px;">
            <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <p class="card-text">Voto: <strong>{{$movie->vote}}</strong></p>
            </div>
        </div>
    @endforeach

</div>
@endsection
