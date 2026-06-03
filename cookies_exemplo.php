<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Testando se o cookie foi definido</title>
</head>
<body>
	<?php 
setcookie("usuarios", "etecia", time()+86400);

setcookie("admin", "user_admin", time()+86400);

echo $_COOKIE['usuarios'] . "<br>";
$admin = $_COOKIE['admin'];

if (isset($_COOKIE['usuario'])) {
	echo "Bem vindo".$_COOKIE['usuario'] . "! <br>";
}else{
	echo "Usuário novo, seja bem vindo! <br>";
}
 ?>



</body>
</html>