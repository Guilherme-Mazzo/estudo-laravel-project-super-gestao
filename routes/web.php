<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

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
Route:: get('/',[\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index'); // name - ele é usado para dar um nome para a rota. No exemplo acima, a rota principal do site foi nomeada como site.index. O nome da rota é usado para gerar URLs e redirecionamentos de forma mais fácil e legível.

// Route::get('/', function () {
//     return '0la seja bem vindo ';
// });

// Route::get('/sobre-nos', function () {
//     return 'sobre-nos ';
// });

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function (){ return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function (){ return 'fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function (){ return 'produtos'; })->name('app.produtos');
});

# Redirecionamento de rotas
# redirect - ele é usado para redirecionar uma rota para outra. No exemplo acima, a rota /rota1 foi redirecionada para a rota /rota2. Ou seja, 
#quando o usuário acessar a rota /rota1, ele será redirecionado para a rota /rota2.
# existem 3 formas de fazer o redirecionamento de rotas no laravel, sendo elas: redirect()->route('nome_da_rota'), que fazemos depois do Route, 
# redirect('/rota1', '/rota2') e Route::redirect('/rota1', '/rota2'), que fazemos na função callback, ou pelos controllers(que é o mais comum).



// Route::get('/rota2', function () {
//     return redirect()->Route('site.rota1');  // redirect()->route('site.rota1') - ele é usado para redirecionar uma rota para outra. No exemplo acima, a rota /rota2 foi redirecionada para a rota /rota1. Ou seja, quando o usuário acessar a rota /rota2, ele será redirecionado para a rota /rota1.
// })->name('site.rota2');



Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])
    ->name('teste');


// Rota de contingencia - ela é usada para tratar rotas que não existem. No exemplo acima, quando o usuário acessar uma rota que não existe, 
// ele será redirecionado para a rota principal do site. Ou seja, quando o usuário acessar uma rota que não existe, ele será redirecionado para a rota principal do site.
Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial.';
});


//Route::redirect('/rota2', '/rota1'); // redirect('/rota2', '/rota1') - ele é usado para redirecionar uma rota para outra. No exemplo acima, a rota /rota2 foi redirecionada para a rota /rota1. Ou seja, quando o usuário acessar a rota /rota2, ele será redirecionado para a rota /rota1.


// Route::get('/contato', function () {
//     return 'contato ';
// });


// /{} - é um parâmetro que será passado na URL. No caso, o parâmetro será passado na URL quando o usuário acessar a rota /
// parametros opcionais precisam ser sequenciados sempre da esquerda para a direita, para que o larael consiga identificar e sequenciar melhor
// Route::get(
//     '/contato/{nome}/{categoria}/{assunto}/{mensagem?}', // ? - indica que o parâmetro é opcional. No caso, o parâmetro mensagem é opcional, ou seja, o usuário pode acessar a rota sem passar o parâmetro mensagem na URL.
//     function(string $nome, string $categoria, string $assunto, string $mensagem = 'mensagem não informada') {  // null - valor padrão caso nao seja passado o parametro na url.
//         echo "Estamos aqui para ajudar {$nome}, sua categoria é {$categoria}, seu assunto é {$assunto} e sua mensagem é {$mensagem}";
//     });


// Route::get(
//     '/contato/{nome}/{categoria_id}', 
//     function(
//         string $nome = 'Desconhecido',
//         int $categoria_id = 1 // 1 - informação
//     ) {  // null - valor padrão caso nao seja passado o parametro na url.
//         echo "Estamos aqui para ajudar {$nome}, sua categoria é {$categoria_id}";
//     })->where('categoria_id', '[0-9]+')->where ('nome', '[A-Za-z]+');    //o parametro nome precisa ter caracteres de A a Z e de a a z, ou seja, não pode ter números nem caracteres especiais.

// Expressões regulares nas rotas permitem definir regras para os parâmetros da URL,
// determinando quais tipos de valores podem ser recebidos.
// Neste exemplo, o parâmetro {id} aceita somente números.
// O where() é usado para aplicar essa regra ao parâmetro da rota.


// sail artisan route:list - exibe uma lista de todas as rotas definidas na aplicação, incluindo o método HTTP, a URL, o nome da rota, o controlador e o middleware associado a cada rota.