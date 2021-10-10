<?php

// DECLARAÇÃO DE UM ARRAY:
$Numeros = [];

// VARIAVEL UTILIZADA PARA PERCORRER O ARRAY E ADICIONAR VALORES:
$Tamanho = 12;

// DECLARAÇÃO DE UMA VARIAVEL PARA FAZER A SOMA:
$Soma = 0;

Echo "Numeros: <br>";

for ($i = 0; $i <= $Tamanho; $i += 1){
    // A POSIÇÃO DO VALOR I RECEBE UM VALOR ENTRE 10 E 99
	$Numeros[$i] = random_int(10, 20);

	// ADICIONA O NUMERO GERADO NA VARIAVEL SOMA:
	$Soma += $Numeros[$i];
   
    // MOSTRA VALOR GERADO ALEATORIO:
	echo "<br>", $Numeros[$i];

}

// MOSTRA O VALOR DA SOMA:
Echo "<br><br>A soma dos numeros é: $Soma"

?>
