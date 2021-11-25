<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Criar e acesso ao array</title>
</head>

<body>

    <?php
        include('lib/utils.php');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo $_POST['dia']. "/" . $_POST['mes'] . "/" . $_POST['ano'];
        }
    ?>


    <!-- PREVENÇÃO DE ATAQUES - SEGURANÇA
		 a função htmlspecialchars() converte caracteres especiais em HTML entities. 
		 Por exemplo, converte o carácter  < em &lt;
    -->		
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <?php

        echo '<select name="dia">';
            for($dia=1; $dia <= 31; $dia++) {
                echo "<option value=\"$dia\">$dia</option>\n";
            }
        echo '</select>';

        echo '<select name="mes">';
            foreach ($meses as $key => $valor) {
                echo "<option value=\"$key\">$valor</option>\n";
            }
        echo '</select>';

        echo '<select name="ano">';
            for ($anos=1980; $anos <= 2018; $anos++) {
                echo "<option value=\"$anos\">$anos</option>\n";
            }
        echo '</select>';

        echo "<input type=\"submit\" name=\"enviar\" value=\"Validar\">";
    ?>
    
    </form>
</body>
</html>