@extends('layouts.main');

@section('mainContent')
<div class="single-prod">
    <div class="container">
        <h1>{{$data["titolo"]}}</h1>
    
        <div class="wrap-arrows">

            @if ($id["idProd"] > 0)
                <div class="prev-arrow">
                    {{-- <a href="{{route('prodotto-singolo', $id["idProd"] -1)}}"><i class="far fa-angle-left"></i></a> --}}
                    <a href="{{route('prodotto-singolo', $id["idProd"] -1)}}"> <<< VAI A PRECEDENTE</a>
                </div>        
            @endif


            @if ($id["idProd"] < $id["idMax"])
                <div class="next-arrow">
                    {{-- <a href="{{route('prodotto-singolo', $id["idProd"] +1)}}"><i class="far fa-angle-right"></i></a> --}}
                    <a href="{{route('prodotto-singolo', $id["idProd"] +1)}}">VAI A SUCCESSIVO >>></i></a>
                </div>
            @endif

         </div>     

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