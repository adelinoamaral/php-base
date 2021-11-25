<?php

    /**
     * Composição
     * Na composição, uma classe cria a instância de outra classe dentro de si própria, 
     * sendo assim, quando ela for destruída, a outra também será.
     */

     class Pessoa {
         public $nome;
         public $valor;

        public function atribuiNome($nome)
        {
            return "O nome da pessoa é: " . $nome;
        }
     }

     class Mostra{
         public $pessoa;
         public $nome;

         function __construct($nome)
         {
             $this->pessoa = new Pessoa();
             $this->nome = $nome;
         }

         public function mostraPessoa()
         {
             echo $this->pessoa->atribuiNome($this->nome);
         }
     }

     // Se eliminar a classe Pessoa, a classe Mostra não iria funcionar
     $mostra = new Mostra("Adelino");
     $mostra->mostraPessoa();
