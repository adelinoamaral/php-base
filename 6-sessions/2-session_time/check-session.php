<?php
if (! isset($_SESSION)) {
    session_start();
}

if (! isset($_SESSION['color']) && (! isset($_SESSION['shape'])) && (! isset($_SESSION['size']))) {
    print - 1;
}
if (isset($_SESSION['color'])) {
    $sessionTimeColor = $_SESSION['color']['time'];
    $sessionLifeTimeColor = $_SESSION['color']['lifetime'];
    if ((time() - $sessionTimeColor) > $sessionLifeTimeColor) {
        unset($_SESSION['color']);
        print '<div class="response-text"><span>Color Session Expired</span></div>';
    }
}

if (isset($_SESSION['shape'])) {
    $sessionTimeShape = $_SESSION['shape']['time'];
    $sessionLifeTimeShape = $_SESSION['shape']['lifetime'];
    if ((time() - $sessionTimeShape) > $sessionLifeTimeShape) {
        unset($_SESSION['shape']);
        print '<div class="response-text"><span>Shape Session Expired</span></div>';
    }
}

if (isset($_SESSION['size'])) {
    $sessionTimeSize = $_SESSION['size']['time'];
    $sessionLifeTimeSize = $_SESSION['size']['lifetime'];
    if ((time() - $sessionTimeSize) > $sessionLifeTimeSize) {
        unset($_SESSION['size']);
        print '<div class="response-text"><span>Size Session Expired</span></div>';
    }
}
exit();
?>