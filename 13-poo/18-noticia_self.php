<?php

include_once("classes/noticia.self.class.php");

$not = new Noticia();
$not->setTitulo("O novo ataque do vírus");
$not->setTexto("O CoronaVirus não veio para brincar");
$not->mostraNoticia();


echo "<br><br>";

$not = new UltimaHora();
$not->setTitulo("O novo ataque do verme");
$not->setTexto("Atacou o mundo todo");
$not->mostraNoticia();