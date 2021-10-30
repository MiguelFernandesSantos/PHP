<?php

#####################################################
#                                                   #
#    NOME: MIGUEL FERNANDES SANTOS.                 #
#    DATA: 02/10/2021                               #
#    PROJETO: Bhaskara.                             #
#                                                   #
#####################################################

$bhaskara = [

		"Delta" => [

					"A" => 4,
					"B" => 2,
					"C" => -6,
					"B_Elevado" => null,
					"Delta" => null,
					"Raiz" => null,
					"Divisor" => null,

					],

			"X" => [

					"X1" => null,
					"X2" => null,

					]

		];


// 4 * A * C:
$bhaskara["Delta"]["Delta"] = 4 * $bhaskara["Delta"]["A"] * $bhaskara["Delta"]["C"]; 

// B²:
$bhaskara["Delta"]["B_Elevado"] = pow($bhaskara["Delta"]["B"], 2);

// A² + (4 * A * C):
$bhaskara["Delta"]["Delta"] = $bhaskara["Delta"]["B_Elevado"] - ($bhaskara["Delta"]["Delta"]);

// RAIZ QUADRADA DE DELTA:
$bhaskara["Delta"]["Raiz"] = sqrt($bhaskara["Delta"]["Delta"]);

// 2 * A:
$bhaskara["Delta"]["Divisor"] = 2 * $bhaskara["Delta"]["A"];

// (-B + RAIZ DE DELTA) / (2 * A):
$bhaskara["X"]["X1"] = (-$bhaskara["Delta"]["B"] + $bhaskara["Delta"]["Raiz"]) / $bhaskara["Delta"]["Divisor"];

// (-B - RAIZ DE DELTA) / (2 * A):
$bhaskara["X"]["X2"] = (-$bhaskara["Delta"]["B"] - $bhaskara["Delta"]["Raiz"]) / $bhaskara["Delta"]["Divisor"];

print_r($bhaskara["X"]);

  ?>
