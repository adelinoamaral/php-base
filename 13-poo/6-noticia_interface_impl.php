<?php
    include_once("classes/noticia.interface.class.php");

    // a classe Noticia implementa os métodos da interface
    // Se iNoticia é uma interface então deve-se implementar,
    // na classeNoticia, os métodos definidos na interface
    class Noticia implements iNoticia
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

    $titulo = 'Campus recebe 500 novas árvores';
    $texto = 'O Plantio realiza-se entre 2018 e 2020,';
    $texto .= ' integrado no programa ambiental em Portugal';

    $not = new Noticia();
    $not->setTitulo($titulo);
    $not->setTexto($texto);
    $not->mostraNoticia();
    
    echo "<pre>";
    print_r($not);
    echo "</pre>";

?>