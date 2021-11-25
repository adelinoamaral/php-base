<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<title>Exercício 1</title>

</head>

<body>
	<?php
		// verifica se o formulário foi submetido
		if (isset($_POST['enviado'])){
			// recebe dados do formulário
			$nome = $_POST['nome'];
			$idade = $_POST['idade'];

			// faz o tratamento dos dados se a informação foi inserida pelo utilizador
			if(!empty($nome) && !empty($idade))
			{
				if($idade >= 0 && $idade < 14) $classficacao = "criança";
				elseif($idade >= 14 && $idade < 18) $classficacao = "adolescente";
				elseif($idade >= 18 && $idade < 65) $classficacao = "adulto";
				elseif($idade >= 65) $classficacao = "idoso";
				$mensagem = "Olá " . $nome . ", a tua classificação é: " . $classficacao;
			}

		}
	?>
	<div class="container mt-5">
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<div class="form-group">
				<?php if(isset($mensagem)) { echo $mensagem;} ?>
			</div>
			<div class="form-group">
				<label for="idNome">Nome</label>
				<input type="text" class="form-control" name="nome" id="idNome" placeholder="Nome" required>
			</div>
			<div class="form-group">
				<label for="idIdade">Idade</label>
				<input type="number" class="form-control" name="idade" id="idIdade" placeholder="Idade" requeired>
			</div>
			<div class="form-group text-right">
				<button type="submit" class="btn btn-primary" id="enviado">Enviar dados</button>
				<input type="hidden" name="enviado" value="TRUE" />            
			</div>
		</form>
	</div>


	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/css/bootstrap.min.css"></script>
</body>

</html>