<?php
    $file_name = "title_form.html";
    $file_content = file_get_contents($file_name);
    echo $file_content . "<br/>";

    /* Printing file content including HTML tags */
    $html_content = str_replace("<","&lt;",$file_content);
    $html_content = str_replace(">","&gt;",$html_content);
    $html_content = str_replace("\r\n","<br/>",$html_content);
    
    echo $html_content;
?>