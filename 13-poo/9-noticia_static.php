<?php

    include_once("classes/noticia_static.class.php");

    $titulo = 'Curso de Informática';
    $texto = 'O melhor curso de sempre...';

    // acesso aos métodos normais
    $not = new Noticia();
    $not->setTitulo($titulo);
    $not->setTexto($texto);
    $not->mostraNoticia();

    // Atribuição de uma valor à propriedade static $nome_jornal
    Noticia::$nome_jornal = "Jornal Navarro";

    // Acesso à propriedade static da classe Noticia
    echo "<p>" . Noticia::$nome_jornal . "</p>";

    // ACESSO À CONSTANTE
    echo "<p>" . Noticia::EMPRESA . "</p>";
    echo "<p>" . $not::EMPRESA . "</p>";

    // Acesso ao método static da classe Noticia
    echo "<p>" . Noticia::MostraTituloJornal() . "</p>";
    
?>