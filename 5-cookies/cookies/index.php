<?php

    if(!isset($_COOKIE['nome'])){

        // pedir nome
        if($_SERVER['REQUEST_METHOD'] != 'POST')
        {
            echo '<form action="" method="POST">
                <input type="text" name="text_nome">
                <input type="submit" value="Guardar">
            </form>';
            // guardar nome
        }else {
            // cria um cookie que expira passados 30 segundos
            setcookie('nome', $_POST['text_nome'], time()+30);
        }
    }else {
        echo 'Olá ' . $_COOKIE['nome'] . "!";;
    }
echo 'Terminado';