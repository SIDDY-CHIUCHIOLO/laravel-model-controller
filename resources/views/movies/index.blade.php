@extends('layouts.main')

@section('title', 'Movies')

@section('main-content')
    <main class="bg-dark p-5 text-white">
        <div class="container-fluid">
            <div class="row text-center mb-3">
                <div class="col-12">
                    <h1>MOVIES</h1>
                </div>
            </div>
            <div class="row d-flex flex-wrap row-cols-6 justify-content-center">
                @foreach ($movies as $movie)
                <div class="card col bg-primary m-3">
                    <div class="card-body">
                        <h5 class="card-title text-center text-dark fw-bold mb-3">{{$movie['title']}}</h5>
                        <h6 class="card-subtitle mb-2">original_title: {{$movie['original_title']}}</h6>
                        <p class="card-text">nationality: {{$movie['nationality']}}</p>
                        <p class="card-text">date: {{$movie['date']}}</p>
                        <p class="card-text">vote: {{$movie['vote']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
    