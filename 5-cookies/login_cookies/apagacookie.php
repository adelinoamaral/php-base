<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		setcookie("nome_user", $_POST['login'], time()-1);
		echo "A Cookie foi eliminada!";
	?>
</body>
</html>