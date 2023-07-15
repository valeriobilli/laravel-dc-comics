@extends('layouts.app')

@section('content')

    <div class="container my-3">
        <h1>Card: {{$comic->title}}</h1>
        <div class="row g-4">
            <div class="col">
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
            <a href="{{route("home")}}">Torna alla lista dei fumetti</a>
            <a href="{{route("comics.edit", $comic->id)}}">Modifica fumetto</a>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Elimina fumetto">

            </form>
        </div>
    </div>

</div>
@endsection