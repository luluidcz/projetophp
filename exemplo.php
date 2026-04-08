<?php 

// criando função em php sem parâmetros

 function somaValor(){
 	echo "Somando...";
 }

 // criando uma função com php em parâmetros

 function imprimirNome($nome){
   echo " <br/> olá $nome";
 }


function somar($num1,$num2){
	return ($num1 + $num2);
}

// executando a função
 somaValor();
 imprimirNome("Etecia");
 echo("<br/>");
 somar(10.50,20.0);
 $resultado = somar(10.50,20.0);
 echo ("O resultado da soma é $resultado");
 
?>