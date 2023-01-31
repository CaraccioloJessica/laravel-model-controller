@extends('layout.main-layout')

@section('head')
  <title>Movies List</title>    
@endsection

@section('content')
<main>
  <h2>Movies list</h2>
    <div>
        <ul>
            @foreach ($movies as $movie)
                <li>{{ $movie -> title }} - {{ $movie -> original_title }} - {{ $movie -> nationality }} - {{ $movie -> date }} - {{ $movie -> vote }}</li>
            @endforeach
        </ul>
    </div>
</main>
@endsection