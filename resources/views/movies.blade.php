@extends('layout.main-layout')

@section('head')
  <title>Movies List</title>    
@endsection

@section('content')
<main>
  <div class="container d-flex flex-wrap justify-content-between py-4">

      @foreach ($movies as $movie)
        <div class="card my_card mb-4 text-center p-1">
          <img src="https://www.electiondataservices.com/wp-content/uploads/2014/10/sorry-image-not-available.jpg" alt="">
          <div>Titolo: {{ $movie -> title }}</div>
          <div>Originale: {{ $movie -> original_title }}</div>
          <div>Produzione: {{ $movie -> nationality }}</div>
          <div>Uscita: {{ $movie -> date }} </div>
          <div>Voto: {{ $movie -> vote }}</div>
        </div>
      @endforeach
    </div>
</main>
@endsection