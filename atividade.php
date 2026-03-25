<?php

$media;
$TotalAprovados;
$Totalreprovados;


// nota do aluno 1
$nota1_aluno1 = 3.
$nota2_aluno1 = 5

// nota do aluno 2

$nota1_aluno2 = 4
$nota2_aluno2 = 8

// nota do aluno 3

$nota1_aluno3 = 2
$nota2_aluno3 = 7

// nota do aluno 4

$nota1_aluno4 = 6
$nota2_aluno4 = 4

// nota do aluno 5

$nota1_aluno5 = 6
$nota2_aluno5 = 8

// nota do aluno 6

$nota1_aluno6 = 9
$nota2_aluno6 = 11


// media do aluno 1
$media1 = ($nota1_aluno1 + $nota2_aluno1) /2

//media do aluno 2
$media2 = ($nota1_aluno2 + $nota2_aluno2) /2

//media do aluno 3
$media3 = ($nota1_aluno3 + $nota2_aluno3) /2

//media do aluno 4
$media4 = ($nota1_aluno4 + $nota2_aluno4) /2

//media do aluno 5
$media5 = ($nota1_aluno5 + $nota2_aluno5) /2

//media do aluno 2
$media6 = ($nota1_aluno6 + $nota2_aluno6) /2

if ($media1 < 3) {
	echo "Reprovado";

}elseif ($media1 >=3 || <=7 ) {
	echo "Exame";
}elseif ($media1 > 7) {
echo "Aprovado";
}


