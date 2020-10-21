@extends('layouts.main')

@php
// importa i dati dal db contenuto in config
$data = config('pasta');
// definisce gli array per tipo di pasta
$lunga = [];
$corta = [];
$cortissima = [];
// ciclo per caricare i dati dal db ai vari array di tipo pasta
foreach ($data as $key => $prodotto) {
  // assegna al prodotto l'id generale che ha nel db
  $prodotto['id'] = $key;
  if($prodotto["tipo"] == "lunga") {
    $lunga[] = $prodotto;
  } elseif ($prodotto["tipo"] == "corta") {
    $corta[] = $prodotto;
  } elseif ($prodotto["tipo"] == "cortissima") {
    $cortissima[] = $prodotto;
  }
}
@endphp

@section('title')
  La Molisana - Home
@endsection

@section('mainContent')
<div class="wrap-prodotti">
  <div class="container">
    {{-- sezione LE LUNGHE --}}
    @if (!empty($lunga))
      <h2>LE LUNGHE</h2>
      <div class="tipo-pasta">
        @foreach ($lunga as $prodotto)
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
    @if (!empty($corta))
      <h2>LE CORTE</h2>
      <div class="tipo-pasta">
        @foreach ($corta as $prodotto)

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
    @if (!empty($cortissima))
      <h2>LE CORTISSIME</h2>
      <div class="tipo-pasta">
        @foreach ($cortissima as $prodotto)
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

  </body>
</html>
