<?php
    // '/' evita a duplicação dos cookies
    // https://stackoverflow.com/questions/7673510/duplicate-cookies
    setcookie('tema', 'dark_mode.css', (time()+365*24*60*60), '/');
    header('Location: index.php');