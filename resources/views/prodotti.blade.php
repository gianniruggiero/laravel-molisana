@extends('layouts.main')

@section('title')
  La Molisana - Home
@endsection


@section('mainContent')
<div class="wrap-prodotti">
    <div class="container">
        {{-- sezione LE LUNGHE --}}
        @if (!empty($paste["lunga"]))
            <h2>LE LUNGHE</h2>
            <div class="tipo-pasta">
            @foreach ($paste["lunga"] as $prodotto)
                <div class="box">
                {{-- immagine del tipo di pasta  --}}
                <img class="pic" src="{{ $prodotto['src'] }}" alt="">
                {{-- livello overlay --}}
                <div class="overlay">
                    {{-- wrapper titolo pasta e icona ristorante --}}
                    <div class="wrap-hover">
                    {{-- imposta la URL per il link alla pagina prodotto specifica --}}
                    <a href="prodotti/show/{{ $prodotto['id'] }}"><h3>{{ $prodotto['titolo'] }}</h3></a>
                    <a href="prodotti/show/{{ $prodotto['id'] }}"><img class="ico-rist" src="{{asset('images/ico-pasta.png')}}" alt="icona"></a>
                    </div>
                    {{-- /wrapper titolo pasta e icona ristorante --}}
                </div>  
                {{-- /livello overlay --}}
                
                </div>
            @endforeach
            </div>
        @endif

        {{-- sezione LE CORTE --}}
        @if (!empty($paste["corta"]))
            <h2>LE CORTE</h2>
            <div class="tipo-pasta">
            @foreach ($paste["corta"] as $prodotto)

                <div class="box">
                {{-- immagine del tipo di pasta  --}}
                <img class="pic" src="{{ $prodotto['src'] }}" alt="">
                {{-- livello overlay --}}
                <div class="overlay">
                    {{-- wrapper titolo pasta e icona ristorante --}}
                    <div class="wrap-hover">
                    {{-- imposta la URL per il link alla pagina prodotto specifica --}}
                    <a href="prodotti/show/{{ $prodotto['id'] }}"><h3>{{ $prodotto['titolo'] }}</h3></a>
                    <a href="prodotti/show/{{ $prodotto['id'] }}"><img class="ico-rist" src="{{asset('images/ico-pasta.png')}}" alt="icona"></a>
                    </div>
                    {{-- /wrapper titolo pasta e icona ristorante --}}
                </div>  
                {{-- /livello overlay --}}
                </div>
            
                @endforeach
            </div>
        @endif

        {{-- sezione LE CORTISSIME --}}
        @if (!empty($paste["cortissima"]))
            <h2>LE CORTISSIME</h2>
            <div class="tipo-pasta">
            @foreach ($paste["cortissima"] as $prodotto)
                <div class="box">
                {{-- immagine del tipo di pasta  --}}
                <img class="pic" src="{{ $prodotto['src'] }}" alt="">
                {{-- livello overlay --}}
                <div class="overlay">
                    {{-- wrapper titolo pasta e icona ristorante --}}
                    <div class="wrap-hover">
                    {{-- imposta la URL per il link alla pagina prodotto specifica --}}
                    <a href="prodotti/show/{{ $prodotto['id'] }}"><h3>{{ $prodotto['titolo'] }}</h3></a>
                    <a href="prodotti/show/{{ $prodotto['id'] }}"><img class="ico-rist" src="{{asset('images/ico-pasta.png')}}" alt="icona"></a>
                    </div>
                    {{-- /wrapper titolo pasta e icona ristorante --}}
                </div>  
                {{-- /livello overlay --}}
                </div>
            @endforeach
            </div>
        @endif
    </div>
</div>
  
@endsection


{{-- @dd($paste["lunga"]); --}}






{{-- 

@section('mainContent')
@if (!empty($paste))
  @foreach ($paste as $key => $tipopasta)
    <h2>$key</h2>
    <ul>
      <p>$tipopasta</p>
    </ul>
   @endforeach
@endif  

@endsection


@dd($paste); --}}
