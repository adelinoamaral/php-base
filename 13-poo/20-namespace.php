<?php
    /**
     * Repare que temos duas classes como o nome do mesmo método.
     * Para evitar conflitos usamos o namespace
     */

     require 'classes/produto.class.php';
     require 'models/produto.php';

     // inserir o nome do namespace antes do método
    //  $produto = new \classes\Produto();
    //  $produto->MostrarDetalhes();
    //  echo "<br>";
    //  $produto1 = new \models\Produto();
    //  $produto1->MostrarDetalhes();


    # Poderiamos simplificar usando a palavra reservada use
    # renomear as classes foi importante para evitar nomes
    # duplicados na instanciação
    use classes\Produto as ProdutoModel;
    use models\Produto as ProdutoClasse;

     $produto = new ProdutoModel();
     $produto->MostrarDetalhes();
     echo "<br>";
     $produto1 = new ProdutoModel();
     $produto1->MostrarDetalhes();