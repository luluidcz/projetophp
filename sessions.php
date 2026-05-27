<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Página WEB -  Sessâo de usuário</title>
</head>
<body>

<?php 
     session_start();
     $_SESSION['nome'] = "Administrador";

    // session_unset()

    //session_destroy()
   
     ?>
     <h3>Sessão de usuário</h3>
     <label>Bem vindo usuário: </label><?php echo $_SESSION['nome']; ?>
     <label>ID usuário: </label><?php echo session_id(); ?>


</body>
</html>