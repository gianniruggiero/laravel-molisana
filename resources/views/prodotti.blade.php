@extends('layouts.main')

@section('title')
  La Molisana - Home
@endsection


@section('mainContent')

{{-- Wrapper pagina Prodotti --}}
<div class="wrap-prodotti">
    {{-- Continaer --}}
    <div class="container">
    {{-- Prodotti divisi per tipo di pasta --}}
    @foreach ($paste as $key => $pasta)
        @if (!empty($paste[$key]))
            <h2>{{$key}}</h2>
            <div class="tipo-pasta">
                @foreach ($paste[$key] as $prodotto)
                    <div class="box">
                        {{-- immagine del tipo di pasta  --}}
                        <img class="pic" src="{{ $prodotto['src'] }}" alt="">
                        {{-- livello overlay --}}
                        <div class="overlay">
                            {{-- wrapper titolo pasta e icona ristorante --}}
                            <div class="wrap-hover">
                            {{-- imposta la URL per il link alla pagina prodotto specifica --}}
                            <a href="{{route('prodotto-singolo', $prodotto['id'])}}"><h3>{{ $prodotto['titolo'] }}</h3></a>
                            <a href="{{route('prodotto-singolo', $prodotto['id'])}}"><img class="ico-rist" src="{{asset('images/ico-pasta.png')}}" alt="icona"></a>
                            </div>
                            {{-- /wrapper titolo pasta e icona ristorante --}}
                        </div>  
                        {{-- /livello overlay --}}
                    </div>
                @endforeach
            </div>    
        @endif
    @endforeach
    </div>
    {{-- /Continaer --}}
</div>
{{-- /Wrapper pagina Prodotti --}}

@endsection

