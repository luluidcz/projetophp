<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 

$value = 'aluno';

setcookie("Ocupação", $value);
/*expira no final da sessão (quando o browser)*/

setcookie("Ocupação", $value, time()+60);
/*expira em 1 min*/

 ?>
</body>
</html>