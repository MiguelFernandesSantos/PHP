<?php

	$Formas = [

				"Cone" => [

							"Volume" => null,
							"Raio" => 3,
							"Altura" => 8,

							],

				"Piramide" => [

							"Volume" => null,
							"Lado1" => 6,
							"Lado2" => 4,
							"Altura" => 8

							],

				"Esfera" => [

							"Volume" => null,
							"Raio" => 6,

							],

				"Cilindro" => [

							"Volume" => null,
							"Raio" => 4,
							"Altura" => 10,

							],

		];

// CHAMAR FUNÇÃO PARA CALCULAR O VOLUME DO CONE:
$Formas["Cone"]["Volume"] = CalculaVolumeCone($Formas["Cone"]["Raio"], $Formas["Cone"]["Altura"]);

// CHAMAR FUNÇÃO PARA CALCULAR O VOLUME DA PIRAMIDE:
$Formas["Piramide"]["Volume"] = CalculaVolumePiramide($Formas["Piramide"]["Altura"], $Formas["Piramide"]["Lado1"], $Formas["Piramide"]["Lado2"]);

// CHAMAR FUNÇÃO PARA CALCULAR O VOLUME DA ESFERA:
$Formas["Esfera"]["Volume"] = CalculaVolumeEsfera($Formas["Esfera"]["Raio"]);

// CHAMAR FUNÇÃO PARA CALCULAR O VOLUME DO CILINDRO:
$Formas["Cilindro"]["Volume"] = CalculaVolumeCilindro($Formas["Cilindro"]["Raio"], $Formas["Cilindro"]["Altura"]);


// FUNÇÃO CONE:
function CalculaVolumeCone ($Raio, $Altura){

	$Raio = pow($Raio, 2);

	$Volume = ($Raio * $Altura) / 3;

	return $Volume;

}


// FUNÇÃO PIRAMIDE:
function CalculaVolumePiramide ($Altura, $Lado1, $Lado2){

	$AreaBase = $Lado1 * $Lado2;

	$Volume = ($AreaBase * $Altura) / 3;

	return $Volume;

}


// FUNÇÃO ESFERA:
function CalculaVolumeEsfera ($Raio){

	$Raio = pow($Raio, 3);

	$Raio = $Raio / 3;

	$Volume = $Raio * 4;

	return $Volume;

}


// FUNÇÃO CILINDRO:
function CalculaVolumeCilindro($Raio, $Altura){

	$Raio = pow($Raio, 2);

	$Volume = $Raio * $Altura;

	return $Volume;

}

  ?>