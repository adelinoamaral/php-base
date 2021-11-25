<?php

    /*
        __autoload : Ao criarem aplicações orientadas à objeto, os programadores 
        colocam a definição de cada classe num ficheiro PHP. 
        Um dos maiores contratempos é ter de escrever uma longa lista de includes 
        no início de cada script (uma chamada para cada classe necessária).

        No PHP é possível definir uma função __autoload(), que é chamada automaticamente
        quando se tenta usar uma classe que ainda não foi definida. 
        
        Ao chamar essa função o “scripting engine” tem uma chance para carregar 
        a classe antes que o PHP comunique um erro. 
    */

    function __autoload($classe)
    {
        if ($classe == 'Noticia') {
            echo "Chama a Classe <b>$classe</b>";
            include_once('classes/noticia.class.php');
        }
    }

    // A classe Noticia não foi carregada, logo o autoload identifica-a.
    class NoticiaPrincipal extends Noticia
    {
        public $imagem;

        function setImagem($valor)
        {
            $this->imagem = $valor;
        }

        function mostraNoticia()
        {
            echo "<center>";
            echo "<u><img src=\"" . $this->imagem . "\"></u><p>";
            echo "<b>" . $this->titulo . "</b><p>";
            echo $this->texto;
            echo "</p></center>";
        }
    }

    $not = new NoticiaPrincipal();
    $not->titulo = 'Curso de Informática termina nesta quarta-feira';
    $not->texto = 'Um dos maiores cursos do país acaba nesta quarta-feira ';
    $not->texto .= 'com número recorde de inscritos';
    $not->imagem = 'heranca.jpeg';

    $not->mostraNoticia();


?>