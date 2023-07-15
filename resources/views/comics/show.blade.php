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
                <div class="mt-3">
                    <div>Descrizione: {{$comic["description"]}}</div>
                    <div>Prezzo: {{$comic["price"]}}</div>
                    <div>Serie: {{$comic["series"]}}</div>
                    <div>Data di uscita: {{$comic["sale_date"]}}</div>
                    <div>Categoria: {{$comic["type"]}}</div>
                    <div>Artisti: {{$comic["artists"]}}</div>
                    <div>Scrittori: {{$comic["writers"]}}</div>
                </div>
            </div>
            <a href="{{route("home")}}">Torna all'homepage</a>
        </div>
    </div>

</div>
@endsection