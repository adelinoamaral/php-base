<?php

    /**
     * Associação 
     * Quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro.
     */
    class Pedido{
        public $numero;
        public $cliente;
    }

    class Cliente{
        public $nome;
        public $endereco;
    }

    $cliente = new Cliente();
    $cliente->nome = "Adelino";
    $cliente->endereco = "Rua da Volta, 4";

    $pedido = new Pedido();
    $pedido->numero = "123";
    $pedido->cliente = $cliente;    // associação

    $dados = array(
        'numero' => $pedido->numero,
        'nome_cliente' => $pedido->cliente->nome,
        'nome_endereco' => $pedido->cliente->endereco
    );

    var_dump($dados);
    

?>
