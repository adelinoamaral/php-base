<?php
$cookie_name = "site";
$cookie_value = "Portal das Dicas";

// cria o cookie
setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); // 86400 = 1 dia

// o cookie não ficou disponível
// echo $_COOKIE[$cookie_name] . '<br>';

if(!isset($_COOKIE[$cookie_name])) { // verifica se o cookie_name está definido
     echo "O cookie '" . $cookie_name . "' não está definido!";
} else {
     echo "O valor do cookie '" . $cookie_name . "' é ".$_COOKIE['site']." !<br>";
}


if(count($_COOKIE) > 0) {
    echo "Cookies estão ativos.";
} else {
    echo "Cookies não estão ativos.";
}