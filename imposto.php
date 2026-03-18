<?php

echo "Salário bruto <br/>";
echo "Imposto de renda <br/>";

echo "Porecentagem de descontos: <br/>";
echo "Valor do desconto: <br/>";

echo "Salário líquido: R$ <br/>";

$salB;
$salL;
$porcentagem;

if ($salB <=242880) {
	echo "Isento";	
	}

if ($salB >=242881 && $salB <=282665) {
		$porcentagem = 0.0075;
		$salL = $salB -($salB*$porcentagem/100);
		echo "Salário bruto = $salB <br/>";
		echo "Imposto de renda = $porcentagem <br/>";
        echo "O Salário líquido é = R$ $salL";
	}

?>