<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Criar e acesso ao array</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <?php
        include('lib/utils.php');
        
        // Cria os arrays dias do mês e anos:
        $dias = range (1, 31);
        $anos = range (1980, 2020);

        /*
            Também poderiamos ter um array de caracteres
            $character_array = range('e','i'); //  returns array('e','f','g','h','i');
        */

        echo '<select name="dia">';
            foreach ($dias as $valor) {
                echo "<option value=\"$valor\">" . $valor . "</option>\n";
                // poderá usar a função next() para obter o valor seguinte do array
                next($dias);
            }
        echo '</select>';

        echo '<select name="mes">';
            foreach ($meses as $key => $valor) {
                echo "<option value=\"$key\">$valor</option>\n";
            }
        echo '</select>';

        echo '<select name="ano">';
            foreach ($anos as $valor) {
                echo "<option value=\"$valor\">$valor</option>\n";
            }
        echo '</select>';

    ?>
    </form>
</body>
</html>