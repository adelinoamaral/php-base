<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erro: Selecione um tipo de ficheiro autorizado.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Erro: O tamanho fo ficheiro ultrapassou o limite.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "O ficheiro foi transferido com sucesso.";
            } 
        } else{
            echo "Erro na transferência do ficheiro. Tente de novo."; 
        }
    } else{
        echo "Erro: " . $_FILES["photo"]["error"];
    }
}
?>