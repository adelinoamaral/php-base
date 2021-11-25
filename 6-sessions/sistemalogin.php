<?php
session_start();
 
define("SYSUSER",'admin');
define("SYSPASSWORD",'secret');

// Chama a função principal
start();
 
/**
 *  inicio o processo de login
 */
function start(){
	if(isset($_POST['login'])){
		if(authenticate()){
			// display secured content if user logged in successfully
			display_secured_content();
		}else{
			// display login form again with message
			display_login_form('O username ou a password é inválida.');
		}
	}else if(isset($_GET['action']) && $_GET['action'] == 'logout'){
		logout();
	}else{
		display_login_form();
	}
}
 
/**
 * Visualiza o formulário do login. Se $msg for passada, é visualizada uma mensagem de erro
 * @param string $msg mensagem de erro
 */
function display_login_form($msg=''){
 ?>
 <style>
 .error {
 color: #ff0000;
 }
 </style>
 <form action="11-sistemalogin.php" method="post">
	 <p class="error"><?php echo $msg; ?></p>
	 <fieldset name="logininfo">
	 <legend>Login</legend>
	 <label for="username">Username:</label> <input type="text" name="username" id="username" /><br /> 
	 <label for="password">Password:</label><input type="password" name="password" id="password" /><br /> 
	 <input type="submit" name="login" value="Login">
	 </fieldset>
 </form>
 <?php 
}
 
/**
 *  visualiza a área reservada depois de efetuar o login
 */
function display_secured_content(){
 ?>
 <h1>Bem-vindo <?php echo $_SESSION['username'];?></h1>
 <p>Entrou na área reservada!</p>
 <p><a href="11-sistemalogin.php?action=Logout">logout</a></p>
 <?php 
}
 
/**
*   validada as entradas do utilizador
*   @return true se a autenticação teve sucesso
*         caso contrário return false
*/
function authenticate(){
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		// verifica se inseriu o username e password corretos
		if($username == SYSUSER  && $password == SYSPASSWORD){
			$_SESSION['username'] = SYSUSER;
			session_write_close();
			return true;
		}
		else{
			return false;
		}
	}
}

/**
* logout
*/
function logout(){

	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),'',time() - 3600, '/');
	}

	$_SESSION = array();
	session_destroy();

	header('location: 11-sistemalogin.php');
}