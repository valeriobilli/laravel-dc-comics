@extends('layouts.app')

@section('content')

    <div class="container my-3">
        <h1>{{$comic->title}}</h1>
        <div class="row mt-3">
            <div class="col d-flex">
                
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="thumb"> 
                
                <div class="ms-3">
                    <div class="mb-2"><span class="badge text-bg-primary">Descrizione:</span> {{$comic["description"]}}</div>
                    <div class="mb-2"><span class="badge text-bg-primary">Prezzo:</span> {{$comic["price"]}}</div>
                    <div class="mb-2"><span class="badge text-bg-primary">Serie:</span> {{$comic["series"]}}</div>
                    <div class="mb-2"><span class="badge text-bg-primary">Data di uscita:</span> {{$comic["sale_date"]}}</div>
                    <div class="mb-2"><span class="badge text-bg-primary">Categoria:</span> {{$comic["type"]}}</div>
                    <div class="mb-2"><span class="badge text-bg-primary">Artisti:</span> {{$comic["artists"]}}</div>
                    <div class="mb-2"><span class="badge text-bg-primary">Scrittori:</span> {{$comic["writers"]}}</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex mt-3">
            
                <div>
                    <a class="btn btn-success me-3" href="{{route("comics.edit", $comic->id)}}">Modifica fumetto</a>
                </div>
    
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger me-3" value="Elimina fumetto">
                </form>

                <div>
                    <a class="btn btn-secondary" href="{{route("home")}}">Torna alla lista dei fumetti</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection