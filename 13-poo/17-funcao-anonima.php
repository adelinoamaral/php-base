<?php
    $a = new class
    {
            function teste()
            {
                echo 'Teste - normal';
            }
    };  # NOTA: éw importante notar que tem que existir um ";" depois da chaveta de fecfar a classe

    $a->teste();