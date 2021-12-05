<?php

    /*
        Classes definidas com a palavra-chave "final" não podem 
        ser herdadas por outras classes. 
    */

    final class Noticia
    {
        protected $titulo;
        protected $texto;

        public function setTitulo($valor)
        {
            $this->titulo = $valor;
        }
        
        public function setTexto($valor)
        {
            $this->texto = $valor;
        }

        public function mostraNoticia()
        {
            echo "<center>";
            echo "<b>" . $this->titulo . "</b><p>";
            echo $this->texto;
            echo "</center><p>";
        }
    }

    /*
        Quando um método é definido palavra-chave "final", 
        as subclasses que o herdarem não poderão sobrescrevê-los.
    */
    class NoticiaTopo
    {
        protected $titulo;
        protected $texto;

        public function setTitulo($valor)
        {
            $this->titulo = $valor;
        }
        
        public function setTexto($valor)
        {
            $this->texto = $valor;
        }

        // este método não pode ser reescrito numa subclasse
        final function mostraNoticia()
        {
            echo "<center>";
            echo "<b>" . $this->titulo . "</b><p>";
            echo $this->texto;
            echo "</center><p>";
        }
    }
?>