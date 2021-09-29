<?php


$GeometriaPlana = [ 
					"Quadrado" => [

									// Base x altura
									"Base" => 10,
									"Altura" => 10,
									"Area" => null,
									"Perimetro" => null,

									],

					"Triangulo" => [

									// (Base x altura) / 2 
									"Base" => 10,
									"Altura" => 10,
									"Lado1" => 5,
									"lado2" => 5,
									"lado3" => 5,
									"Area" => null,
									"Perimetro" => null,

									],

					"Retangulo" => [

									// Base x altura
									"Base" => 10,
									"Altura" => 10,
									"Area" => null,
									"Perimetro" => null,

									],

					"Circulo" => [

									// Pi x raio²
									"Diametro" => 20,
									"Raio" => null,
									"Pi" => 3.14,
									"Area" => null,
									"Perimetro" => null,


									],

					"Losango" => [

									// (Diagonal maior x Diagonal menor) /2
									"DiagonalMaior" => 10,
									"DiagonalMenor" => 10,
									"Lado" => 5,
									"Area" => null,
									"Perimetro" => null,

									],

					"Trapezio" => [

									// ((BaseMaior + BaseMenor) / 2) * Altura
									"BaseMaior" => 10,
									"BaseMenor" => 10,
									"Lado1" => 5,
									"Lado2" => 5,
									"Altura" => 10,
									"Area" => null,
									"Perimetro" => null,

									],

					"Paralelogramo" => [

									// Base x altura
									"Base" => 10,
									"Altura" => 10,
									"Area" => null,
									"Perimetro" => null,

										],
			];

function calcularQuadrado ($Base, $Altura){


	$Area = $Base * $Altura;
	$Perimetro = ($Base * 2) + ($Altura * 2);
	echo ("<br>A area do Quadrado é de $Area. <br>");
	echo ("O perimetro do Quadrado é $Perimetro. <br>");


}

function calcularTriangulo ($Base, $Altura, $Lado1, $Lado2, $Lado3){


	$Area = ($Base * $Altura) / 2;
	$Perimetro = $Lado1 + $Lado2 + $Lado1;
	echo ("<br>A area do Triangulo é de $Area <br>");
	echo ("O perimetro do Triangulo é $Perimetro<br>");


}

function calcularRetangulo ($Base, $Altura){


	$Area = $Base * $Altura;
	$Perimetro = ($Base * 2) + ($Altura * 2);
	echo ("<br>A area do Retangulo é de $Area. <br>");
	echo ("O perimetro do Retangulo é $Perimetro. <br>");


}

function calcularCirculo ($Pi, $Diametro){


	$Area = $Pi * (($Diametro / 2) * ($Diametro / 2));
	$Perimetro =  (2 * $Pi) * ($Diametro / 2);;
	echo ("<br>A area do Circulo é de $Area. <br>");
	echo ("O perimetro do Circulo é $Perimetro. <br>");


}

function calcularLosango ($DiagonalMaior, $DiagonalMenor, $Lado){


	$Area = ($DiagonalMenor * $DiagonalMaior) / 2;
	$Perimetro = $Lado * 4;
	echo ("<br>A area do Losango é de $Area. <br>");
	echo ("O perimetro do Losango é $Perimetro. <br>");


}

function calcularTrapezio ($BaseMaior, $BaseMenor, $Altura, $Lado1, $Lado2){


	$Area = (($BaseMaior + $BaseMenor) / 2) * $Altura;
	$Perimetro = $BaseMaior + $BaseMenor + $Lado1 + $Lado2;
	echo ("<br>A area do Trapezio é de $Area. <br>");
	echo ("O perimetro do Trapezio é $Perimetro. <br>");


}

function calcularParalelogramo ($Base, $Altura){


	$Area = $Base * $Altura;
	$Perimetro = ($Base * 2) + ($Altura * 2);
	echo ("<br>A area do Paralelogramo é de $Area. <br>");
	echo ("O perimetro do Paralelogramo é $Perimetro. <br>");


}

calcularQuadrado ($GeometriaPlana["Quadrado"]["Base"],$GeometriaPlana["Quadrado"]["Altura"]);


calcularTriangulo($GeometriaPlana["Triangulo"]["Base"],$GeometriaPlana["Triangulo"]["Altura"],$GeometriaPlana["Triangulo"]["Lado1"],$GeometriaPlana["Triangulo"]["lado2"],$GeometriaPlana["Triangulo"]["lado3"]);


calcularRetangulo ($GeometriaPlana["Retangulo"]["Base"],$GeometriaPlana["Retangulo"]["Altura"]);


calcularCirculo($GeometriaPlana["Circulo"]["Pi"],$GeometriaPlana["Circulo"]["Diametro"]);


calcularLosango($GeometriaPlana["Losango"]["DiagonalMaior"],$GeometriaPlana["Losango"]["DiagonalMenor"],$GeometriaPlana["Losango"]["Lado"]);


calcularTrapezio($GeometriaPlana["Trapezio"]["BaseMaior"],$GeometriaPlana["Trapezio"]["BaseMenor"],$GeometriaPlana["Trapezio"]["Altura"],$GeometriaPlana["Trapezio"]["Lado1"],$GeometriaPlana["Trapezio"]["Lado2"]);


calcularParalelogramo ($GeometriaPlana["Paralelogramo"]["Base"],$GeometriaPlana["Paralelogramo"]["Altura"]);

  ?>