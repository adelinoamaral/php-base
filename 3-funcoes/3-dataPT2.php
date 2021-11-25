
<?php

header('Content-Type: text/html; charset=iso-8859-1');

include 'libs/datas.php';

/*
			LC_ALL é uma constante que indica que as informações locais serão definidas 
			em todas as instâncias. 
			LC_ALL engloba LC_COLLATE, LC_CTYPE, LC_MONETARY, LC_NUMERIC e LC_TIME.
		*/

// Define timezone local com datas em português
setlocale(LC_ALL, 'pt_PT', 'pt_PT.utf-8', 'pt_PT.utf-8', 'portuguese');
// setlocale(LC_ALL, "pt_PT", "pt_PT.iso-8859-1", "pt_PT.utf-8", "portuguese");

// Fuso horário português
date_default_timezone_set('Europe/Lisbon');

// strftime — Format a local time/date according to locale settings

# Vamos criar uma data por extenso em função do setlocale()
// strtotime — Parse about any English textual datetime description into a Unix timestamp
// %A: dia da semana por extenso.
// %d: dia do mês representado com dois digitos.
// %B: mês por extenso.
// %Y: ano representado com quatro digitos.
echo strftime('%A, %d de %B de %Y', strtotime('today'));

echo "<br><br> Data: ";
$date = date("Y-m-d"); 	// ou date("Y/m/d")
echo $date . "<br>";

// define data específica por extenso
echo strftime("%A, %d de %B de %Y", strtotime($date));

echo "<br>";

echo data_actual_pt();

echo "<br>";

echo ContaAnosDecorridos("2019-11-10") . " anos.";

echo "<br>";

$result1 = getWeekdayName('2021-11-18'); // returns Saturday
echo $result1;


?>
