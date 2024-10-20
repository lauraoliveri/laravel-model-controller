@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Movies
</h1>

<h2>
   Movies list:
</h2>

<ul>
    @foreach ($movies as $movie)
    <li>
        {{movie->title}}
    </li>  
    @endforeach

</ul>
@endsection
