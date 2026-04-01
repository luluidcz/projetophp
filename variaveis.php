<?php
print "Usando print para exibir na tela <br/>";

$data = "10 de março de 2026"; //string
$salario = 850.000; //float ou double
$cargo = "Estagiário"; //string
$idade = 18; //integer ou int
$resultado = true; //boolean

echo "Arquivo criado em $data <br/>";
printf("Salário mínimo: R$ %.2f <br/>", $salario);

$texto = sprintf("%s recebe R% %.2f por mês", $cargo, $salario*2);
echo $texto;
?>