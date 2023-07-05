@extends('layouts.app')

@section('content')

    <div class="container my-3">
        <h1>Card: {{$comic->title}}</h1>
        <div class="row g-4">
            <div class="col d-flex flex-wrap">
                <div class="card comic text-center">
                    <a href="{{ route("comics.show", $comic->id)}}"><div>{{$comic["title"]}}</div></a>
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="thumb"> 
                </div>
                <a href="{{route("home")}}">Torna all'homepage</a>
            </div>
        </div>
    </div>

</div>
@endsection