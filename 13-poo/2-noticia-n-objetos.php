<?php
    include_once("classes/noticia.class.php");

    // Criamos 2 instâncias da mesma classe.
    $not1 = new Noticia();
    $not2 = new Noticia();

    // atribuiu valores aos atributos/propriedades do objeto referenciado por $not1
    $not1->titulo = 'Novo curso de PHP Avançado';
    $not1->texto = 'Este curso contém os seguinte tópicos: POO, XML, etc.';

    $not1->mostraNoticia();

    echo "<br><br>";

    // atribuiu valores aos atributos/propriedades do objeto referenciado por $not2
    $not2->titulo = 'Curso de PHP - POO';
    $not2->texto = 'Estudo da Linguagem Orientada a Objetos.';
    $not2->mostraNoticia();

?>