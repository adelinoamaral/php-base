<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$utilizador = htmlentities(addslashes($_POST['utilizador']));
		$senha 		= htmlentities(addslashes($_POST['password']));
	
		$contador = 0;
	
		echo $utilizador . " - " . $senha . "<br>";
	
		//$pass_cifrado = password_hash($senha, PASSWORD_DEFAULT);
	
		// muda o coste para 12, torna a senha mais forte
		$pass_cifrado = password_hash($senha, PASSWORD_DEFAULT, array("cost"=>12));
	
		echo "Mostra: " . $pass_cifrado . "<br>";
	
		// guardavamos a senha na base de dados
	
		// também podemos usar a função crypt()
	
		$utilizadorDB = "adelino";
		$senhaDB = '$2y$12$WDchRRdR0IZJeO42ZLNNcuUtejoLuHkUPoNpnFk8rrBSHc7C1CuUa';
	
		// veridicar se a senha di formulário é igual à da base de dados
		// password_verify() = true se senhas forem iguais
		if(password_verify($senha, $senhaDB)){
			$contador++;
		}
	
	if($contador > 0){
		// encontrou mais de 1 utilizador
		echo "Utilizador registado";
	}
	else{
		echo "Utilizador não registado";
	}
	?>
</body>
</html>