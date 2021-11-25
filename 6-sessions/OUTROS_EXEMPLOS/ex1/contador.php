<?php
	// inicia a sessão manualmente
   session_start();
   
   if( isset( $_SESSION['contador'] ) )
   {
      $_SESSION['contador'] += 1;
   }
   else
   {
	   // inicializa contador
	   $_SESSION['contador'] = 1;
   }
   $msg = "Visitou esta página <b>".  $_SESSION['contador'];
   $msg .= "</b> vezes nesta sessão: ";

?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="UTF-8">
	<title>Contador</title>
</head>
<body>

	<?php  echo $msg . " - " . session_id();  ?>
	<p>Para continuar clique no link<br />
	
	<!-- 
		Faz passar o valor de PHPSESSID= ... por parâmtero
		Se o browser não permitir cookies, usamos o valor de PHPSESSID
	-->
	<a  href="logoutcontador.php?<?php echo htmlspecialchars(session_id()); ?>"> Terminar Sessão </a></p>
</body>
</html>