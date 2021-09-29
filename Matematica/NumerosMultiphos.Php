<?php


	$Parametros = [

					// VALOR INICIAL DO LAÇO DE REPETIÇÃO:
					"Inicio" => 1,


					// VALOR FINAL DO LAÇO DE REPETIÇÃO:
					"Fim" => 100,


					// O NUMERO USADO PARA VER SE OS NUMEROS SAO MULTIPLO DELE:
					"NumeroMultipho" => 10,

					];

	// LAÇO DE REPETIÇÃO PARA VERIFICAR UM INTERVALO DE NUMEROS:
	while ($Parametros["Inicio"] <= $Parametros["Fim"]){

		// VERIFICA SE O NUMERO É MULTIPLO:
		if ($Parametros["Inicio"] % $Parametros["NumeroMultipho"] == 0){

			Echo ("O numero ".$Parametros["Inicio"]." é multiplo de ". $Parametros["NumeroMultipho"]."<br><br>");

		}

		$Parametros["Inicio"] += 1;

	}

  ?>