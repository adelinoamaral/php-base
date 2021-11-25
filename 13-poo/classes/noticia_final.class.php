<?php

    /*
        Classes definidas com a palavra-chave "final" não podem ser herdadas por outras classes. 
        Quando um método é definido dessa forma, as subclasses que o herdarem não poderão sobrescrevê-los.
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