@extends('layouts.main')

@section('mainContent')
<div class="single-prod">
    <div class="container">
        <h1>{{$data["titolo"]}}</h1>
        <div class="wrap-img">
            <img class="img-pasta-h" src="{{$data["src-h"]}}" alt="pasta">
            <img class="img-pasta-v" src="{{$data["src-p"]}}" alt="confezione pasta">
        </div>
        <div class="descrizione">
           {!!$data["descrizione"]!!}
        </div>
    </div>
</div>

@endsection
