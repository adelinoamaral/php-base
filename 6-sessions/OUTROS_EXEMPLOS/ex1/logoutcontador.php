<?php
	session_start();

	// session_name() - obtém e/ou define o nome da sessão atual
	if(isset($_COOKIE[session_name()]))
	{
		// remove o cookie
		setcookie(session_name(), '', time() - 3600, '/');
		//echo "Nome: " . session_name();	// mostra:  PHPSESSID
	}

	echo "Fim da sessão: " . $_COOKIE[session_name()];

	// limpa os dados do array $_SESSION
	$_SESSION[] = array();

	// remove todas as variáveis de sessão
	session_unset(); 

	// elimina a sessão e remove o cookie associado. Por defeito está na pasta tmp do servidor.
	session_destroy();
?>

<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>LOGOUT</title>
</head>

<body>
	<p>Saiu do sistema!</p>
	<a href="contador.php">Contador.php</a>
</body>
</html>
