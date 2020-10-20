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

  {{-- sezione LE LUNGHE --}}
  @if (!empty($lunga))
    <h2>LE LUNGHE</h2>
    <div class="tipo-pasta">
      @foreach ($lunga as $prodotto)
        <div class="box">
          {{-- imposta la URL per il link alla pagina prodotto specifica --}}
          <a href="prodotti/show/{{ $prodotto['id'] }}"><h3>{{ $prodotto['titolo'] }}</h3></a>
          <img class="pic" src="{{ $prodotto['src'] }}" alt="">
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
          {{-- imposta la URL per il link alla pagina prodotto specifica --}}
          <a href="prodotti/show/{{ $prodotto['id'] }}"><h3>{{ $prodotto['titolo'] }}</h3></a>
          <img class="pic" src="{{ $prodotto['src'] }}" alt="">
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
          {{-- imposta la URL per il link alla pagina prodotto specifica --}}
          <a href="prodotti/show/{{ $prodotto['id'] }}"><h3>{{ $prodotto['titolo'] }}</h3></a>
          <img class="pic" src="{{ $prodotto['src'] }}" alt="">
        </div>
      @endforeach
    </div>
  @endif

@endsection

  </body>
</html>
