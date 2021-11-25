<?php
	// inicia a sessão manualmente
	session_start();

	// verifica se a variável de sessão utilizador existe
	if(isset($_SESSION['utilizador']))
	{
		// reutiliza a varriável de sessão e indica qual o ID da sesão corrente
		echo "Bem-vindo ", $_SESSION['utilizador'], " esta é uma nova sessão<br> Foi-lhe atribuído o ID = " . session_id();
		
		
		
	} else if(!isset($_SESSION['utilizador'])) {
		// a variável de sessão não existe
		
		// elimina a variável de sessão
		unset($_SESSION['count']);
		
		// destroi a sessão por segurança
		session_start();
		session_destroy();
		
		// redireciona para o index.php
		header("Location: index.php?erro=4");
	}
	
?>
