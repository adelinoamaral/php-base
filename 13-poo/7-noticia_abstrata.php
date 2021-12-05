<?php

    include_once("classes/noticia_abstrata.class.php");

    // A classe Noticia é abstrata pelo que tem
    // implementar os métodos setTexto() e mostraNoticia()
    class NoticiaPrincipal extends Noticia
    {
        private $imagem;

        public function setTexto($valor)
        {
            $this->texto = $valor;
        }

        function setImagem($valor)
        {
            $this->imagem = $valor;
        }

        public function mostraNoticia()
        {
            echo "<center>";
            echo "<img src=\"" . $this->imagem . "\"><p>";
            echo "<b>" . $this->titulo . "</b><p>";
            echo $this->texto;
            echo "</center><p>";
        }
    }

    $titulo = 'Campus recebe 500 novas árvores';
    $texto = 'O Plantio realiza-se entre 2018 e 2020,';
    $texto .= ' integrado no programa ambiental em Portugal';
    $imagem = 'heranca.jpg';

    $not = new NoticiaPrincipal();
    $not->setTitulo($titulo);
    $not->setTexto($texto);
    $not->setImagem($imagem);
    $not->mostraNoticia();

    echo "<pre>";
    print_r($not);
    echo "</pre>";

?>