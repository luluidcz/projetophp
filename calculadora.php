<?php
$num1=10;
$num2=20;
$op=1;

function soma($num1,$num2){
	return ($num1 + $num2);
}


function subtracao ($num1,$num2){
	return ($num1 - $num2);
}

function divisao($num1,$num2){
	return ($num1/$num2);
}

function multiplicacao ($num1,$num2){
	return ($num1 * $num2);
}

switch ($op) {
	case 1: 
	$resp = soma($num1,$num2);
		$op = "soma";
		break;

	case 2: 
		 $resp = subtracao($num1,$num2);
		$op = "subtração";
		break;

	case 3: 
	 $resp = divisao($num1,$num2);
	$op = "divisão";
		break;

	case 4:
	$resp = multiplicacao($num1,$num2);
	$op = "multiplicação";
		break;

	default: echo ("Sair");
		break;
}
 
 echo "A $op do $num1 e $num2 = $resp";

?>