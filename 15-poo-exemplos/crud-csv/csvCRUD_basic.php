<?php
ini_set('display_errors','On');
require('class.csvCRUD.php');

//////////////////////
// Define Table Headers:
// RowNum is automatically added by the class. It refers to the 0-indexed line number of the CSV and you must include it when specifying custom headers
// You can not manipulate the RowNum, but you can utilitze the column for admin actions such as delete and edit. These actions would be defined the in the template columns array.
// All other columns are referred to alphabetically like a spreadsheet.
//////////////////////
$tbl_headers = array('RowNum'=>'Row:','A'=>'UPC:','B'=>'EAN:','C'=>'Type:','D'=>'Country:','E'=>'Genre:','F'=>'Price:','G'=>'Descrip:','H'=>'MOD:');


$csv = new csvCRUD('example.txt','|');
$csv -> set_custom_tbl_headers($tbl_headers);
$tbl = $csv -> get_tbl_html();//after all desired options set, retrieve the reulting query HTML.

?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <title>DVD Collection</title>
    <script language="Javascript" type="text/javascript" src="js/sorttable.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="container">
        <?php
            echo "$tbl";
        ?>
    </div>
</body>
</html> 

