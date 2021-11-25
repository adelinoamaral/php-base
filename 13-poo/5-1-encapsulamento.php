<?php

    include_once('classes/noticia_encapsulamento.class.php');

    // esta nova classe herda as características da classe NoticiaPrincipal
    class NoticiaUltimaHora extends NoticiaPrincipal
    {
        function mostraNoticia()
        {
            echo "<center>";
            echo "<b>" . $this->titulo . "</b><p>";
            echo $this->texto;
            echo "</center><p>";
        }
    }

    $titulo = 'Programação Orientada Objetos';
    $texto = 'Um grande tema a explorar.';
    $imagem = 'heranca.jpeg';

    // cria uma instância da classe NoticiaPrincipal
    $not_princ = new NoticiaPrincipal();
    $not_princ->setTitulo($titulo);
    $not_princ->setTexto($texto);
    $not_princ->setImagem($imagem);
    $not_princ->mostraNoticia();

    echo "<pre>";
    print_r($not_princ);
    echo "</pre>";

    $titulo = 'Campus recebe 500 novas árvores';
    $texto = 'O Plantio realiza-se entre 2018 e 2020,';
    $texto .= ' integrado no programa ambiental em Portugal';
    $not_ulthora = new NoticiaUltimaHora();
    $not_ulthora->setTitulo($titulo);
    $not_ulthora->setTexto($texto);
    $not_ulthora->mostraNoticia();

    echo "<pre>";
    print_r($not_ulthora);
    echo "</pre>";

?>