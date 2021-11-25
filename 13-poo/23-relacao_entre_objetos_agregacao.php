<?php

    /**
     * Agregação
     * Na Agregação, uma classe precisa da outra para executar uma ação, ou seja,
     * uma classe utiliza a outra como parte de si própria.
     */

     class Produtos {
         public $nome;
         public $valor;

        function __construct($nome, $valor)
        {
            $this->nome = $nome;
            $this->valor = $valor;
        }
     }

     class Carrinho {
         public $produtos;

         public function adiciona(Produtos $produto){
             $this->produtos[] = $produto;
         }

         public function visualiza(){
             foreach($this->produtos as $produto)
             {
                echo $produto->nome . " | ";
                echo $produto->valor . "<hr>";
             }
            
        }
     }

     $produto1 = new Produtos("Notebook", "1500");
     $produto2 = new Produtos("Rato", "60");

     $carrinho = new Carrinho();
     $carrinho->adiciona($produto1);
     $carrinho->adiciona($produto2);
     $carrinho->visualiza();