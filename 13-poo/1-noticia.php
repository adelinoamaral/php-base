<?php

    // Inlui a classe noticia neste ponto do código
    include_once("classes/noticia.class.php");

    // A ordem da inserção da classe no ficheiro é irrelevante, o que
    // é preciso é que ela apareça o ficheiro. Portanto, posso criar um 
    // obejto e depois definir a classe.

    /* 
        Cria uma instância da classe Noticia
        A palavra new permite criar um objeto a partir da classe.
        Portanto, um objeto é uma variável criada a partir de uma classe.
    */
    $not = new Noticia();

    var_dump($not);

    // os atributos são do tipo public, significa que se pode atribuir 
    // valores diretamente sem recorrer a métodos.
    $not->titulo = 'Novo curso de PHP Avançado';
    $not->texto = 'Este curso contém os seguinte tópicos: POO, XML, etc.';

    // chamada do método mostraNoticia() para visualizar as alterações
    $not->mostraNoticia();

    echo "<br><br>";

    // alteração do atributo titulo sem utilizar o atributo diretamente
    $not->setTitulo("Curso de PHP Avançado");

    /*
        Como podes ver existem 2 processos de alterar o valor dos atributos.
        Qual o método mais seguro?
    */

    $not->mostraNoticia();

    var_dump($not);
    echo "<br><br>";
    print_r($not);
?>