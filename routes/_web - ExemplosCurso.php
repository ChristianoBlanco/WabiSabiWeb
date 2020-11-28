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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/admweb', function () {
    return "Rota para Index admWeb";
});*/

/*Route::get('/admweb/{nome}', function ($nome) {
    return "Rota para Index admWeb - TESTE DE PASSAGEM DE PARAMETROS - " . "<br>"."Testando o Parametro: ".$nome;
});*/

//Passagem de parametro opcional utilizando "?"
/*Route::get('/admweb/{nome?}', function ($nome=null) {
     if (isset($nome)) {
         return "Rota para Index admWeb - TESTE DE PASSAGEM DE PARAMETROS - " . "<br>"."Testando o Parametro: ".$nome;
     }else{
        return "Rota para Index admWeb - TESTE DE PASSAGEM DE PARAMETROS - " . "<br>"."Testando o Parametro: "."NÃO HÁ PARAMETROS !!!!";
     }
});*/
//Regras em rotas
/*Route::get('/admweb/rotaregras/{nome?}/{cod?}', function ($nome=null, $cod=null) {
    echo "Rota para Index admWeb - TESTE DE PASSAGEM DE PARAMETROS - "."<br>";
    for ($i=0; $i < $cod; $i++) {
        echo "<br>"."Testando o Parametro: ".$nome ;
    }
})->where('nome','[A-Za-z]+')->where('cod','[0-9]+');*/

//Route::redirect('todosprodutos1', 'admweb', 301);

Route::get('todosprodutos2', function () {
    return redirect()->route('admweb.alunos.teste');
  });

Route::prefix('/admweb')->group(function () {

    Route::get('/', function () {
        return view('admweb.index');
    })->name('admweb');

    Route::get('/testes/teste', function () {
        return view('admweb.teste.teste');
    })->name('admweb.alunos.teste');

    Route::get('/testes', function () {
        return view('admweb.teste.index');
    })->name('admweb.alunos');

});



