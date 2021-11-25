<?php
    $file_name = "title_form.html";
    $head_content = file_get_contents($file_name,FALSE,NULL,7,48);
    printHTMLContent($head_content);
    $form_content = file_get_contents($file_name,FALSE,NULL,62,157);
    printHTMLContent($form_content);

    /* Printing file content including HTML tags */
    function printHTMLContent($content) {
    $content = str_replace("<","&lt;",$content);
    $content = str_replace(">","&gt;",$content);
    $content = str_replace("\r\n","<br/>",$content);
    echo $content . "<br/>";
}
?>