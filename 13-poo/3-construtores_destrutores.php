<?php
    include_once("classes/noticia2.class.php");

    // o construtor é inicializado 2 parâmetros
    $not = new Noticia('Curso de PHP Avançado','Abordaremos: POO, XML, etc.');
    $not->mostraNoticia();

    /*
        Um destrutor é chamado automaticamente quando um script termina. 
        No entanto, para acionar explicitamente o destruidor, pode destruir 
        o objeto usando a função unset().
    */

    unset($not);  // obriga a chamada o método __destruct()

    // OBSERVA COM MUITA A ATENÇÃO O ENCERRAMENTO DA CLASSE

    echo "<h3>Fim do ficheiro</h3>";

    /*
        Se não eliminarmos o objeto manualmente, a mensagem "A classe 
        "Noticia" foi destruída."
        Seria a última mensagem a visualizar.
    */
?>