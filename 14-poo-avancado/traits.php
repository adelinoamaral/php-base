<?php

    /**
     * TRAITS
     * São um grupo de métodos que podem ser inseridos dentro de classes.
     * Permitem a reutilização do código.
     * 
     * Os tarits são definidos com a expressão trait, seguido pelo nome e por um bloco
     * de código. As regras para dar nomes a traits sãs as mesmas que usamos nas classes.
     * 
     */

     trait MinhasHabilidades
     {
         public function falar($mensagem)
         {
             echo "Eu digo: $mensagem";
         }

         public function saltar($metros)
         {
             echo "Eu salto: $metros metros";
         }
     }

     class Humano
     {
         use MinhasHabilidades;
     }

     $h = new Humano();
     $h->falar("Olá Pessoal");
     echo "<br>";
     $h->saltar(5);