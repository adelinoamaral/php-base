<?php
   
    include('layout/header.php');
    include('layout/nav.php');

    if(isset($_GET['p'])){
        $pag = $_GET['p'];
    }
    else $pag = 'inicio';

    switch($pag){
        case 'inicio':
            include('inicio.php');
            break;
        case 'perfil':
            include('perfil.php');
            break;
        case 'servicos':
            include('servicos.php');
            break;
        case 'contactos':
            include('contactos.php');
            break;
    }

    include('layout/footer.php');
?>