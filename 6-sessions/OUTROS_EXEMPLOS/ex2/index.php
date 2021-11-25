<?php
	// a sessão deve ser criada (session_start()) antes do envio de informação para o browser.

	// Inicia a sessão manualmente
  	session_start();

	// cria o array regras
	$regras = array('administrator','leitor','editor');

	// as variáveis de sessão guardam valores.
	$_SESSION['user'] = 'admin';	
	$_SESSION['nome'] = 'Adelino';
	$_SESSION['regras'] = $regras;	// a variável de sessão regras guarda o array

	echo "ID de sessão: " . session_id() . "<br>";

	// força a gravação dos dados da sessão no servidor, TERMINA A SESSÃO atual,
	session_write_close();
?>

<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Sessão</title>
</head>

<body>
	<a href="profile.php">Visite a página profile...</a>
</body>
</html>
