<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        //echo "A soma de {$p1} + {$p2} é: " . ($p1 + $p2);

                                  // passamos um array associativo para a view, onde a chave é o nome da variável que será usada na view 
                                  // e o valor é o valor que será passado para a view.
        //return view('site.teste', ['p1' =>$p1, 'p2' => $p2]);

        //return view('site.teste', compact('p1', 'p2')); //compact -> o compact é uma função do PHP que cria um array associativo a partir de variáveis. 
                                                        //  No caso, ele cria um array associativo com as variáveis $p1 e $p2, onde a chave é o nome da variável 
                                                        // e o valor é o valor da variável.

        return view('site.teste')->with('p1', $p1) ->with('p2', $p2);     //with() - o with() é um método do Laravel que permite passar variáveis para a view. 
                                                                          // No caso, ele passa as variáveis $p1 e $p2 para a view site.teste, onde a chave é o nome da variável 
                                                                          // e o valor é o valor da variável.
            
            
    }
}
