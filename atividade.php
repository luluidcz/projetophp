<?php

$nota1 = 10;
$nota2 = 10;
$media;
$mediaClasse = 0;

$totalAprovados;
$totalReprovados;
$totalexames;


for ($i=1; $i <=6 ; $i++) { 
	$media = ($nota1 + $nota2)/2;
if ($media < 3) {
	echo "Reprovado<br/>";
}elseif ($media >=3 && $media <=7 ) {
	echo "Exame<br/>";
}else {
echo "Aprovado <br/>";
}

}
	


?>

