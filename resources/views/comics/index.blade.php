@extends('layouts.app')

@section('content')

    <div class="container my-3">
        <h1>Comics list</h1>
        <div class="row g-4">
            <a class="btn btn-primary" href="{{ route("comics.create") }}">Aggiungi un nuovo fumetto</a>
            <div class="col d-flex flex-wrap">
                @foreach ($comics as $comic)
                    <div class="card comic text-center">
                        <a href="{{ route("comics.show", $comic->id)}}"><div>{{$comic["title"]}}</div></a>
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="thumb"> 
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection