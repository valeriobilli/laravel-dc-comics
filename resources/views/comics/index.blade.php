@extends('layouts.app')

@section('content')

    <div class="container my-3">
        <h1>Comics list</h1>
        <div class="row">
            <a class="btn btn-primary" href="{{ route("comics.create") }}">Aggiungi un nuovo fumetto</a>
            <div class="col d-flex justify-content-between flex-wrap">
                @foreach ($comics as $comic)
                <div class="card mt-5" style="width: 18rem;">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic["title"]}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic["title"]}}</h5>
                      <a href="{{ route("comics.show", $comic->id)}}" class="btn btn-primary">Mostra dettagli</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection


