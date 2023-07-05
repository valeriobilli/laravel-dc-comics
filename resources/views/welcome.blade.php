@extends('layouts.app')

@section('content')

    <div class="container my-3">
        <h1>Welcome Page</h1>
        {{-- <div class="row g-4">
            <div class="col d-flex flex-wrap">
                @foreach ($comics as $comic)
                    <div class="card comic text-center">
                        <div>{{$comic["title"]}}</div>
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="thumb"> 
                    </div>
                @endforeach
            </div>
        </div> --}}
    </div>

</div>
@endsection