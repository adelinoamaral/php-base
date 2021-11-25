<!doctype html>
<html lang="pt-pt">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>
	
	<?php
	
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			// fileToUpload - atributo name da tag input type="file"
			
			// destino dos ficheiros após upload (diretório)
			$target_dir = "uploadfiles/";
			// basename($_FILES["fileToUpload"]["name"]) - devolve o nome do ficheiro com extensão
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			
			// determina o tipo da extensão do ficheiro: .doc / .jpg / ...
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			// Check if image file is a actual image or fake image
			
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

			if($check !== false) {
				echo "O ficheiro é uma imagem - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "O ficheiro não é uma imagem.";
				$uploadOk = 0;
			}
		
			// Check se o ficheiro exists
			if (file_exists($target_file)) {
				echo "Desculpe, o ficheiro já existe exists.";
				$uploadOk = 0;
			}
			// Check o tamanho do ficheiro
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Desculpe, o ficheiro excede o tamanho.";
				$uploadOk = 0;
			}
			// Tipo de ficheiros permitidos
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				echo "Desculpe, só são permitidas extensão JPG, JPEG, PNG & GIF.";
				$uploadOk = 0;
			}
			// Check se é possível mover o ficheiro
			if ($uploadOk == 0) {
				echo "Desculpe, não pode fazewr o upload do ficheiro.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					echo "O upload do ficheiro ". basename( $_FILES["fileToUpload"]["name"]). " foi executado com sucesso.";
				} else {
					echo "Desculpe, houve um erro durante o upload do ficheiro.";
				}
			}
			
		}     // ./POST
	?>
	
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
		Selecione a image para upload:
		<input type="file" name="fileToUpload" id="fileToUpload"> <br>
		<input type="submit" value="Upload Image" name="submit">
	</form>
</body>
</html>