<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sessão - Implementando os formulários</title>
	<?php 
	if ($_POST) {
	 	session_start();
	 	$_SESSION['nome'] = $_POST['nome'];
	 	$_SESSION['senha'] = $_POST['senha'];
	 	header("location:session_implementando_forms.php");
	 } ?>
</head>
<body>
    <form action="" method="post">
    	<label for="nome">Nome:</label>
    	<input type="text" name="nome" id="nome">
    	<label for="senha">Senha:</label>
    	<input type="password" name="senha" id="senha">
    	<input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>