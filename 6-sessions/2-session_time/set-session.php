<?php
// verifica se existe sessão
if (! isset($_SESSION)) {
    session_start();
}

$currentTime = time();
$_SESSION['color'] = array(
    "value" => "blue",
    "time" => $currentTime,
    "lifetime" => 3
);
$_SESSION['shape'] = array(
    "value" => "circle",
    "time" => $currentTime,
    "lifetime" => 5
);
$_SESSION['size'] = array(
    "value" => "big",
    "time" => $currentTime,
    "lifetime" => 10
);

header("Location: index.php?status=starts");
exit();
?>