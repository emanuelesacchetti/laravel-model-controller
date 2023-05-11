@extends('layouts.app')

@section('page-title', 'Last movies')


@section('content')
    <div class="container home-cont">
        <div class="row">
            @foreach($bestMovies as $movie)
                <div class="col-3">
                    <div class="card m-2 text-light" style="width: 18rem;">
                        <img src="{{$movie->img}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->original_title}}</h5>
                            <h2 class="card-title">{{$movie->title}}</h2>
                            <p class="card-text">{{$movie->date}}</p>
                            <div>
                                Voto: <strong>{{$movie->vote}}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection