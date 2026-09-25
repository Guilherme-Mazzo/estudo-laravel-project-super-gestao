<?php     
// namespace é um recurso do PHP que permite organizar o código em namespaces, evitando conflitos de nomes entre classes, funções e constantes. No exemplo acima, 
// estamos definindo o namespace App\Http\Controllers para a classe PrincipalController, indicando que ela pertence ao diretório app/Http/Controllers.
namespace App\Http\Controllers;

// use é uma palavra-chave do PHP que permite importar classes, funções e constantes de outros namespaces para o namespace atual. 
// No exemplo acima, estamos importando a classe Request do namespace Illuminate\Http, que é usada para lidar com requisições HTTP no Laravel.
use Illuminate\Http\Request;

// PrincipalController é uma classe que estende a classe base Controller do Laravel. Ela é responsável por lidar com as requisições HTTP e retornar respostas para o usuário.
// A classe PrincipalController é definida no arquivo app/Http/Controllers/PrincipalController.php, que é o local padrão para armazenar os controladores do Laravel.
// extends é uma palavra-chave do PHP que indica que a classe PrincipalController herda os métodos e propriedades da classe base Controller.
class PrincipalController extends Controller
{
    public function principal() {
        return view('site.principal');
    }
}

// public é uma palavra-chave do PHP que indica que o método principal() é público, ou seja, pode ser acessado de qualquer lugar do código.
// function é uma palavra-chave do PHP que indica que estamos definindo uma função ou método. No exemplo acima, estamos definindo o método principal() da classe PrincipalController.
// echo é uma função do PHP que imprime uma string na tela. No exemplo acima, estamos imprimindo a mensagem '0la seja bem vindo' quando o método principal() for chamado.