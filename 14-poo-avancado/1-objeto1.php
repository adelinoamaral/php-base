<?php
    // insere a classe
    include_once 'classes/Produto1.class.php';

    // cria uma instância (objeto) da classe Produto
    $produto = new Produto;

    // atribuir valores aos atributos
    $produto->Codigo = 4001;
    $produto->Descricao = 'CD - The Best of Eric Clapton';

    var_dump($produto);
?>
