<?php
	session_start();

	// session_name() - obtém e/ou define o nome da sessão atual
	if(isset($_COOKIE[session_name()]))
	{
		// remove o cookie criado expirando uma hora antes da hora atual
		setcookie(session_name(), '', time() - 3600, '/');
	}

	echo "Foi removida a sessão com ID: " . session_id();

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
</body>
</html>
