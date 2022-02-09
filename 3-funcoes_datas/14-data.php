<?php
   
    $date = "2022-01-10";
    // menos 3 dias
    $newDate = date('Y-m-d', strtotime($date. ' - 3 days'));
    // strtotime($date. ' - 3 days'); vem em milisegundo
    echo $newDate . "<br>";

    $date = "2022-05-01";
    // menos 3 meses
    $newDate = date('Y-m-d', strtotime($date. ' - 3 months'));
    echo $newDate . "<br>";

    $date = "2022-02-01";
    $newDate = date('Y-m-d', strtotime($date. ' - 5 years'));
    echo $newDate;
   
?>