<?php
	// The setcookie() function must appear BEFORE the <html> tag.
	// cria o cookie
		setcookie("selecionou_idioma", $_GET['lingua'], time()+86400);

	// 1horas tem 3600 segundos. 1 dias = 24horas * 3600segundos = 86400
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cria cookie</title>
</head>
<body>
	<?php
	
		// redireciona para a página vercookie.php
		header("Location: vercookie.php");
	?>
	
</body>
</html>