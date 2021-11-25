<?php

	// Analisa o tipo de erro ocorrido
	if(isset($_GET['erro'])){
		
		if($_GET['erro'] == 1){
			echo "ERRO: deves preencher todos os campos";
		} else if($_GET['erro'] == 2) {
			echo "ERRO: os dados inseridos não estão corretos";
		} else if($_GET['erro'] == 3){
			echo "Não tentar saltar o formulário";
		} else if($_GET['erro'] == 4){
			echo "Tens que iniciar sessão";
		}
		
		// limpar o array para evitar problemas
		unset($_GET['erro']);
	}

?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="UTF-8">
	<title>Acesso utilizador</title>
</head>
<body>
	<form action="login.php" method="post">
		<label for="">Utilizador</label>
		<input type="text" name="user" required><br>
		<label for="">Senha</label>
		<input type="text" name="pass" required><br>
		<label for=""><input type="checkbox" name="sessao" value="1">Lembrar</label><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>