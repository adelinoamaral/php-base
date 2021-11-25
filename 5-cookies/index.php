<?php

	// verifica se a variável selecionou_idioma existe
	if(isset($_COOKIE['selecionou_idioma'])){
		
		if($_COOKIE['selecionou_idioma'] == "pt-pt"){
			// redireciona para a página index_pt.php
			header("Location: index_pt.php");	
			
		} else if($_COOKIE['selecionou_idioma'] == "es"){
			// redireciona para a página index_es.php
			header("Location: index_es.php");
		}
		
	}
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
	<style>
		.container{
			width: 600px;
			margin: 100px auto;
		}
		.row{width: 100%;}
		.col-md-2{
			width: 30%;
			height: 95px;
			margin: 0;
			padding: 0;
			float: left;
		}
		.col-md-10{
			width: 70%;
			height: 95px;
			margin: 0;
			padding: 0;
		}
		.bandeira{height: 95px;}
	</style>
</head>
<body>
	<div class="container">
		<h2>Selecione o idioma: </h2>
		<div class="row">
			<div class="col-md-2">
				<a href="criacookie.php?lingua=pt-pt"><img src="pt.png" alt="Portugal" class="bandeira"></a>
			</div>
			<div class="col-md-10">
				<a href="criacookie.php?lingua=es"><img src="es.jpg" alt="" class="bandeira"></a>
			</div>
		</div>
	</div>
</body>
</html>