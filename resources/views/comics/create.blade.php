@extends('layouts.app')

@section('content')

    <div class="container my-3">
        <h1>Create</h1>
        <div class="row g-4">
            <div class="col d-flex flex-wrap">
                <form action="{{ route('comics.store')}}" method="post">
                    @csrf

                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title">

                    <label for="description">Descrizione</label>
                    <input type="textarea" name="description" id="description">

                    <label for="thumb">Copertina</label>
                    <input type="text" name="thumb" id="thumb">

                    <label for="price">Prezzo</label>
                    <input type="text" name="price" id="price">

                    <label for="artists">Artisti</label>
                    <input type="text" name="artists" id="artists">

                    <label for="writers">Scrittori</label>
                    <input type="text" name="writers" id="writers">

                </form>
            </div>
        </div>
    </div>

</div>
@endsection