<?php

    include_once("classes/noticia_heranca.class.php");

    $not = new NoticiaPrincipal(
        "O curso termina nesta quarta-feira", 
        "Um dos maiores cursos do país", 
        "heranca.jpg"
    );
    
    $not->mostraNoticia();

?>