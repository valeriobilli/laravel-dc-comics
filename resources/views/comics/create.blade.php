@extends('layouts.app')

@section('content')

    

    <div class="container my-3">
        
        <h1>Aggiungi un fumetto</h1>
        <a class="mb-4" href="{{route("home")}}">Torna alla lista dei fumetti</a>
    
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="row g-4">
            <div class="col">
                <form action="{{ route('comics.store') }}" method="POST" class="needs-validation">
                    @csrf {{-- va inserito in ogni form per questioni di sicurezza  --}}
                     
                    <label for="title">Titolo</label>
                    <input class="form-control mb-3 @error('title') is-invalid @enderror" type="text" name="title" id="title" placeholder="@error('title') {{$message}} @enderror" value="{{ old('title') }}">

                    <label for="description">Descrizione</label>
                    <textarea class="form-control mb-3" cols="30" row="10" name="description" id="description" value="{{ old('description') }}"></textarea>

                    <label for="thumb">Copertina</label>
                    <input class="form-control mb-3 @error('thumb') is-invalid @enderror" type="text" name="thumb" id="thumb" placeholder="@error('thumb') {{$message}} @enderror" value="{{ old('thumb') }}">

                    <label for="price">Prezzo</label>
                    <input class="form-control mb-3 @error('price') is-invalid @enderror" type="text" name="price" id="price" placeholder="@error('price') {{$message}} @enderror" value="{{ old('price') }}">

                    <label for="series">Serie</label>
                    <input class="form-control mb-3" type="text" name="series" id="series" value="{{ old('series') }}">

                    <label for="sale_date">Data di uscita</label>
                    <input class="form-control mb-3 @error('sale_date') is-invalid @enderror" type="text" name="sale_date" id="sale_date" placeholder="@error('sale_date') {{$message}} @enderror" value="{{ old('sale_date') }}">

                    <label for="type">Categoria</label>
                    <input class="form-control mb-3" type="text" name="type" id="type" value="{{ old('type') }}">

                    <label for="artists">Artisti</label>
                    <input class="form-control mb-3 @error('artists') is-invalid @enderror" type="text" name="artists" id="artists" placeholder="@error('artists') {{$message}} @enderror" value="{{ old('artists') }}">

                    <label for="writers">Scrittori</label>
                    <input class="form-control mb-5  @error('writers') is-invalid @enderror" type="text" name="writers" id="writers" placeholder="@error('witers') {{$message}} @enderror" value="{{ old('writers') }}">

                    <input class="form-control mb-3 btn btn-primary" type="submit" value="Crea">
                   

                </form>
            </div>
        </div>

    </div>

</div>
@endsection