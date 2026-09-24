<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route:: é um objeto que representa a rota que está sendo definida. Ele é usado para definir a rota e a ação que será executada

// quando a rota for acessada. No exemplo acima, temos três rotas definidas:

    // function - ele é uma função anônima que será executada quando a rota for acessada. No exemplo acima, cada rota retorna uma string diferente como resposta. 
// // é a ação que será executada quando a rota for acessada. No exemplo acima, cada rota retorna uma string diferente como resposta.

// // return - ele é usado para retornar uma resposta da função anônima. No exemplo acima, cada rota retorna uma string diferente como resposta.
// get - ele é um método HTTP que indica que a rota será acessada através de uma requisição GET. No exemplo acima, todas as rotas são acessadas através de requisições GET.
// callback - ele é uma função anônima que será executada quando a rota for acessada. No caso o é a function.

// quando eu passo uma string no lugar da function, o laravel entende que eu quero chamar um método de um controller. No caso, o método principal do controller PrincipalController.
// o @ ele chama o método principal do controller PrincipalController. No caso, o método principal do controller PrincipalController.
// '/' nao passei nada pois é a rota principal do site. No caso, a rota principal do site é a rota que será acessada quando o usuário acessar o site sem passar nenhum parâmetro na URL. 
// No caso, a rota principal do site é a rota que será acessada quando o usuário acessar o site sem passar nenhum parâmetro na URL.
Route:: get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);

// Route::get('/', function () {
//     return '0la seja bem vindo ';
// });

// Route::get('/sobre-nos', function () {
//     return 'sobre-nos ';
// });

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);

// Route::get('/contato', function () {
//     return 'contato ';
// });