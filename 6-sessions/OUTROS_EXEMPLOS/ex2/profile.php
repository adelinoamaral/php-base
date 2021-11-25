<?php
	session_start();
	
	echo "ID de sessão: " . session_id() . "<br>";

	if(isset($_SESSION['nome'])){
		echo sprintf("Bem-vindo %s!",$_SESSION['nome']);
	}
	else
	{
		echo "Não iniciou sessão!!";
	}

	if(isset($_SESSION['regras']))
	{
		// implode - converte os elementos de um vetor numa string
		echo sprintf('<br />Foram definidas as seguintes regras: %s', implode($_SESSION['regras'],'-'));
	}
	else
	{
		echo "As regras não foram definidas!!";
	}
?>

<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Obter dados da sessão</title>
</head>

<body>
	<p>[ Verifica a posição deste parágrafo em relação às mensagens da sessão... ]</p>
	<p><a href="logout.php">Sair do sistema</a></p>
</body>
</html>
