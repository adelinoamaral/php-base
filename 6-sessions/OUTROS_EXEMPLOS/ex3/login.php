<?php
	if(!isset($_POST['sessao'])) $_POST['sessao'] = 0;


	// uma sessão por defeito dura 20 minutos

	if(isset($_POST['user']) and isset($_POST['pass'])){

		if(empty($_POST['user']) or empty($_POST['pass'])){
			
			// tratamento de erros no index.php - erro=1 campos vazios
			header("Location: index.php?erro=1");
		}
		else {
			// verifica se o nome de utilizador ou password estão corretos?
			if( $_POST['user'] == "Adelino" and $_POST['pass']== "123" )
			{
				// cria uma sessão manualmente e uma cookie com o nome PHPSESSID.
				session_start();
				
				// verifica a opção "lembrar"
				if($_POST['sessao'] == 1){
					// a sessão fica a durar 1 dia
					ini_set(session.cookie_liftime, time(60*60*24));
				}
				
				// se o tempo da sessão não for alterado então a sessão fica aberta por 60 minutos
				
				// cria a variável de sessão utilizador
				$_SESSION['utilizador'] = $_POST['user'];
				
				header('Location: acedido.php');
			}
			else {
				header("Location: index.php?erro=2");
			}
		}
		
	} else {
		header("Location: index.php?erro=3");
	}
		

?>



    session_write_close();