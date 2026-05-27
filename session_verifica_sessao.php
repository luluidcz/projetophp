<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Verifica sessões</title>
	<?php 
	session_start();
	if ($_SESSION['nome'] != "master") {
          session_destroy();
          header("location:session_block.php");
	}


	 ?>
</head>
<body>
   <b>página autorizada!!</b>
</body>
</html>