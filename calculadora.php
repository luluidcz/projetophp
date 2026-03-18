<?php
$num1=10;
$num2=20;
$op=4;

switch ($op) {
	case 1: $resp = $num1 + $num2;
		$nomeOp = "soma";
		break;

	case 2: $resp = $num1 - $num2;
		$nomeOp = "subtração";
		break;

	case 3: $resp = $num1/$num2;
		$nomeOp = "divisão";
		break;

	case 4: $resp = $num1*$num2;
		$nomeOp = "multiplicação";
		break;

	default: echo ("Sair");
		break;
}
 echo "A $nomeOp do $num1 e $num2 = $resp";

?>