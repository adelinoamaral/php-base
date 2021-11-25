<?php
	$login = "adelino";
	$pass = "123";
	/*
		vamos supor que o utilizador inseriu os valores corretos e
		existe na base de dados. Para validar este detalhe vamos usar
		$entrou=true;	
	*/
	$entrou=false;
	$autenticar = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<?php
	
		if(entrou == true){
			$autenticar = true;
			// verifica se a checkbox ficou ativada
			if(isset($_POST['recordar'])){
				setcookie("nome_user", $_POST['login'], time()+86400);
			}
			
		}
		else {
			echo "O utilizador não existe na base de dados";
		}
		
	
		// Mostra ou não o formulário
		if($autenticado == false ){
			
			if(!isset($_COOKIE['nome_user'])){
				include("formulario.html");
			}
			
		}
	?>
	
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, molestiae, impedit? Voluptas assumenda neque minima quisquam quis harum reiciendis, ad, distinctio itaque nulla iste! Debitis, accusamus. Totam sit cupiditate adipisci.	
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet pariatur quae, quidem nihil modi provident voluptatibus quibusdam est, ea, optio incidunt expedita tenetur illo architecto consectetur nam. Cum nulla distinctio iure nihil rerum est maiores inventore facere ullam numquam cupiditate expedita pariatur nostrum unde, perferendis reprehenderit alias nam quas, consectetur doloremque nobis fuga mollitia totam. Error sit alias nesciunt dolores omnis ab, tempora voluptatum nostrum cum, sapiente quod natus minus doloremque quos, vitae dicta reiciendis adipisci dolor in quo nemo suscipit dolorum accusantium ipsam molestiae! Quidem, inventore illum? Amet deserunt, quam blanditiis quasi iusto, fugit nisi! Nam quibusdam, velit impedit. Excepturi suscipit nemo voluptas voluptatem ipsum reprehenderit dolores quam dolore, consequatur ab architecto vero officia itaque atque, accusamus, delectus commodi cum animi amet perferendis sapiente tempora! Quidem unde consequuntur blanditiis vitae ipsum, reprehenderit accusantium. Eum aliquid voluptate velit amet, deserunt odit! Deleniti nulla iure dicta laboriosam rem officiis quo ex necessitatibus hic voluptates quis, repudiandae modi repellat, perspiciatis asperiores, possimus aperiam? Id nam, illum saepe modi voluptatibus sit eos. Sunt exercitationem repudiandae, porro, illum quos praesentium assumenda tempora consequuntur sequi quis et a deserunt inventore voluptas totam dolores. Earum ipsam quam voluptatibus, nisi eaque expedita voluptas, dolorum blanditiis voluptatum odit.
	</p>
</body>
</html>