<?php

	// Uma matriz que tem quantos numeros o programador precisa descobrir se é impar ou par:
$Numeros = [
				44,86,15,16,75,90,656,25,153,165,813,32,36
			];

	// Matriz para guardar os valores de pares e impares:
$ImparPar = [

				"Par" => 0,
				"SomaPar" => 0,
				"MediaPar" => null,
				"Impar" => 0,
				"SomaImpar" => 0,
				"MediaImpar" => null,

			];

// Um laço de repetiçao que para cada valor da matriz numero verifica se é um numero impar ou par:
foreach ($Numeros as $Numero) {

	// verifica se o resto da divisao é 0
	if ($Numero % 2 == 0){

		Echo ("<br>O numero $Numero é um numero par.<br>");
		$ImparPar["Par"] += 1; 
		$ImparPar["SomaPar"] += $Numero;

	}else{

		Echo ("<br>O numero $Numero é um numero impar .<br>");
		$ImparPar["Impar"] += 1;
		$ImparPar["SomaImpar"] += $Numero; 

	}

}

// Calcula a media dos numeros pares:
$ImparPar["MediaPar"] = $ImparPar["SomaPar"] / $ImparPar["Par"];

// Calcula a media dos numeros impares:
$ImparPar["MediaImpar"] = $ImparPar["SomaImpar"] / $ImparPar["Impar"];

Echo ("<br>A Quantidade de numeros Pares é de: " . $ImparPar["Par"]."<br>");

Echo ("<br>A media dos numeros Pares é de: " . round($ImparPar["MediaPar"],2)."<br>");

Echo ("<br>A Quantidade de numeros Impares é de: " . $ImparPar["Impar"]."<br>");

Echo ("<br>A media dos numeros Impares é de: ". round($ImparPar["MediaImpar"],2)."<br>");

?>
