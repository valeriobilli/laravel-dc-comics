@extends('layouts.app')

@section('content')

    <div class="container my-3">
        <h1>Create</h1>
        <div class="row g-4">
            <div class="col">
                <form action="{{ route('comics.store')}}" method="post">
                    @csrf {{-- va inserito in ogni form per questioni di sicurezza  --}}
                     
                    <label for="title">Titolo</label>
                    <input class="form-control mb-3" type="text" name="title" id="title" value="{{$comic->title}}">

                    <label for="description">Descrizione</label>
                    <input class="form-control mb-3" type="textarea" name="description" id="description" value="{{$comic->description}}">

                    <label for="thumb">Copertina</label>
                    <input class="form-control mb-3" type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">

                    <label for="price">Prezzo</label>
                    <input class="form-control mb-3" type="text" name="price" id="price" value="{{$comic->price}}">

                    <label for="series">Serie</label>
                    <input class="form-control mb-3" type="text" name="series" id="series" value="{{$comic->series}}">

                    <label for="sale_date">Data di uscita</label>
                    <input class="form-control mb-3" type="text" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">

                    <label for="type">Categoria</label>
                    <input class="form-control mb-3" type="text" name="type" id="type" value="{{$comic->type}}">

                    <label for="artists">Artisti</label>
                    <input class="form-control mb-3" type="text" name="artists" id="artists" value="{{$comic->artists}}">

                    <label for="writers">Scrittori</label>
                    <input class="form-control mb-5" type="text" name="writers" id="writers" value="{{$comic->writers}}">

                    <input class="form-control mb-3" type="submit" value="Crea">

                </form>
            </div>
        </div>

    </div>

</div>
@endsection