<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ROUTE PAGINA NEWS

Route::get('/', function () {
   return view('home');
})->name("home");


// ROUTE PAGINA NEWS
Route::get('/news', function () {
   return view('news');
})->name("news");


// ROUTE PAGINA DEL SINGOLO PRODOTTO
Route::get('/prodotti/show/{id}', function ($id) {
   // controlla se esiste elemento con indice $id, se esiste dunque il prodotto
   if (config("pasta.$id") == null) {
      abort(404);
   }
   $prodotto = config("pasta.$id");
   $prodotti = config("pasta");
   $id_max = count($prodotti) - 1;
   $id = ["idProd" => $id, "idMax" => $id_max];
   //dd($id_max);
   //return view('prodotto-singolo', ["data" => $prodotto], "idNext => $id");
   return view('prodotto-singolo', ["data" => $prodotto], ["id" => $id]);
   // where controlla che $id sia numerico
})->where('id', '[0-9]+')->name('prodotto-singolo');


Route::get('/prodotti', function () {

// importa i dati dal db contenuto in config
$data = config('pasta');

/* // definisce gli array per tipo di pasta
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
*/

$paste = [];

foreach ($data as $key => $prodotto) {
   $prodotto["id"] = $key;
   $paste[$prodotto["tipo"]][]= $prodotto;
}

// Passa i dati da stampare alla view come secondo parametro
return view('prodotti', ["paste" => $paste]);

})->name("prodotti");