<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Pesquisa palavras</title>
</head>

<body>
    <?php

		$str = "Notícia do site de emprego “Manda-te” e dá conta de vagas para todo o mundo, incluindo em território nacional.\nSó em Portugal, existem 18 oportunidades para os cargos de engenheiro de teste, especialista em segurança das tecnologias de informação, gestor de idiomas, especialistas em SAP e em desenvolvimento de software JAVA.\nJá a nível internacional, a Siemens precisa de um engenheiro de projectos de eficiência energética e de um responsável de grandes contas para Espanha, de um analista de investimentos e de um gestor de marketing para a Alemanha, assim como um analista de negócio para o Reino Unido, entre outras vagas.";

        /*
            trim() remove espaços em branco do início e do fim da string.
            Pode remover outros caracteres predefinidos, por exemplo, trim("Hello World", "Hed!")
        */
		$str = trim($str);
  
        if(isset($_POST['enviado']))
        {   
            $pesquisa = $_POST['txt'];
            
            // str_word_count - conta o número de palavra numa string
            echo "<p>O texto tem: " . str_word_count($str) . " palavras.</p>";
			// mb_strlen($str, 'UTF-8'); - conta caracter
			echo "<p>A palavra<b> $pesquisa </b>começa na posição: <b>" . (strpos($str, $pesquisa)) . "</b>.</p>";
        }
    ?>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <p>Pesquisa: <input type="text" name="txt" size="40" /></p>
		<p><textarea name="corpo" cols="50" rows="20" ><?php echo $str; ?></textarea> </p>
        <p><input type="submit" name="envia" value="Enviar Dados" /></p>
		<p><input type="hidden" name="enviado" value="TRUE" /> </p>
    </form>
</body>
</html>
