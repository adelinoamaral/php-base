<?php
setcookie('site', '', time()-3600); // tempo negativo e/ou valor vazio

//verifica se o cookie está definido
if(!isset($_COOKIE['site'])) { // verifica se o cookie_name está definido
     echo "O cookie 'site' não está definido!<br>";
} else {
     echo "O valor do cookie 'site' é ".$_COOKIE['site']." !<br>";
}

if(count($_COOKIE) > 0) { // verifica se o cookie está ativo
    echo "O cookie está ativo.";
} else {
    echo "O cookie não está ativo.";
}