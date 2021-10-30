<?php

#####################################################
#                                                   #
#    NOME: MIGUEL FERNANDES SANTOS.                 #
#    DATA: 04/10/2021                               #
#    PROJETO: ESTATISTICA.                          #
#                                                   #
#####################################################

$estatistica = [

					"Numeros" => [10,10,1,45,63,74,32,67,31,54,21,56,23],

					"Pesos" => [1,2,3,5,6,1,8,1,2,4,2,6,3],

					"Quantidade" => null,
					
					"Variancias" => [],

					"VarianciasQuadrada" => [],

				];

CalculaTudo($estatistica);

function CalculaTudo ($estatistica){

	$Tudo = [
				"Media" => 0,
				"MediaPonderada" => 0,
				"Moda" => 0,
				"PrimeiroQuartil" => 0,
				"SegundoQuartil" => 0,
				"TerceiroQuartil" => 0,
				"Amplitude" => 0,
				"VarianciasSimples" => 0,
				"VarianciasQuadrada" => 0,

			];

	// RETORNA A MEDIA:
	$Tudo["Media"] = CalcularMediaSimples($estatistica["Numeros"]);

	// RETORNA A MEDIA PONDERADA:
	$Tudo["MediaPonderada"] = CalcularMediaPonderada($estatistica["Numeros"], $estatistica["Pesos"]);

	// RETORNA A MODA:
	$Tudo["Moda"] = Moda($estatistica);

	$Tudo["PrimeiroQuartil"] = PrimeiroQuartil($estatistica);

	$Tudo["SegundoQuartil"] = SegundoQuartil($estatistica);

	$Tudo["TerceiroQuartil"] = TerceiroQuartil($estatistica);

	$Tudo["Amplitude"] = Amplitude($estatistica);

	$Tudo["VarianciasSimples"] = VarianciasSimples($estatistica, $Tudo["Media"]);

	$Tudo["VarianciasQuadrada"] = VarianciasQuadrada($estatistica, $Tudo["Media"]);

	echo "<pre>";
	print_r($Tudo);
	echo "</pre>";

}

function CalcularMediaSimples ($valores){

	$tamanho = count($valores);
	$media = 0;

	foreach ($valores as $valor){

		$media = $media + $valor;

	}

	$media = $media / $tamanho;

	return $media;
}

function CalcularMediaPonderada ($valores, $Pesos){

	$SomaValores = 0;
	$SomaPesos = 0;
	$Indice = 0;

	foreach ($valores as $valor){

		$valor = $valor * $Pesos["$Indice"];

		$SomaValores = $SomaValores + $valor;
		$Indice = $Indice + 1;

	}

	foreach ($Pesos as $peso){

		$SomaPesos = $SomaPesos + $peso;

	} 

	$media = $SomaValores / $SomaPesos;

	return $media;
}

function Moda ($Numeros){

	$Numeros["Quantidade"] = array_count_values($Numeros["Numeros"]);

	arsort($Numeros["Quantidade"]);

	$Atual = null;

	foreach ($Numeros["Quantidade"] as $Numero) {
		
		if($Atual == null){

			// PEGA O VALOR ATUAL DO ARRAY QUE O PONTEIRO ESTA APONTANDO.
			$Atual = current($Numeros["Quantidade"]);

			// PEGA A CHAVE ATUAL DO ARRAY QUE O PONTEIRO ESTA APONTANDO.
			$Chave = key($Numeros["Quantidade"]);

		}elseif ($Numero > $Atual){

			$Chave = key($Numeros["Quantidade"]);
			$Atual = current($Numeros["Quantidade"]);

		}elseif ($Numero == $Atual) {
			
			 return 0;
		}
		
		// MUDA O PONTEIRO DO ARRAY PARA O PROXIMO VALOR

	}
	
	return $Chave;
}

function PrimeiroQuartil ($estatistica){

	sort($estatistica["Numeros"]);

	$Quantidade = count($estatistica["Numeros"]);

	$NumeroExato = $Quantidade / 4;

	$Min = round($NumeroExato,0);
	$Max = null;

	if ($Min == $NumeroExato){



	} else if($Min > $NumeroExato){

		$Max = $Min;
		$Min = $Min - 1;

	}else{

		$Max = $Min + 1;

	}

	if ($NumeroExato > $Min and $NumeroExato < $Max){

		$NumeroExato = floor($NumeroExato);

	}

	Return $estatistica["Numeros"][$NumeroExato];
}

function SegundoQuartil ($estatistica){

	sort($estatistica["Numeros"]);

	$Quantidade = count($estatistica["Numeros"]);

	$NumeroExato = $Quantidade / 2;

	$Min = round($NumeroExato,0);
	$Max = null;

	if ($Min == $NumeroExato){



	} else if($Min > $NumeroExato){

		$Max = $Min;
		$Min = $Min - 1;

	}else{

		$Max = $Min + 1;

	}

	if ($NumeroExato > $Min and $NumeroExato < $Max){

		$NumeroExato = floor($NumeroExato);

	}

	Return $estatistica["Numeros"][$NumeroExato];

}

function TerceiroQuartil ($estatistica){

	sort($estatistica["Numeros"]);

	$Quantidade = count($estatistica["Numeros"]);
	$Quantidade = $Quantidade * 3;
	$NumeroExato = $Quantidade / 4;

	$Min = round($NumeroExato,0);
	$Max = null;

	if ($Min == $NumeroExato){



	} else if($Min > $NumeroExato){

		$Max = $Min;
		$Min = $Min - 1;

	}else{

		$Max = $Min + 1;

	}

	if ($NumeroExato > $Min and $NumeroExato < $Max){

		$NumeroExato = floor($NumeroExato);

	}

	Return $estatistica["Numeros"][$NumeroExato];

}

function Amplitude ($estatistica){

	$Max = max($estatistica["Numeros"]);

	$Min = min($estatistica["Numeros"]);

	$num = $Max - $Min;

	return $num;
 
}

function VarianciasSimples ($estatistica, $media){

	foreach ($estatistica["Numeros"] as $Numero ) {

		$Numero = $Numero - $media;
		array_push($estatistica["Variancias"], $Numero);

	}

	foreach ($estatistica["Variancias"] as $varia) {
		
		$varia = round($varia, 3);

	}

	$Fim = array_sum($estatistica["Variancias"]);

	$Fim = floor($Fim);

	return $Fim;

}

function VarianciasQuadrada ($estatistica, $media){

	foreach ($estatistica["Numeros"] as $Numero ) {

		$Numero = $Numero - $media;

		array_push($estatistica["Variancias"], $Numero);

	}

	foreach ($estatistica["Variancias"] as $Numero ) {

		$Numero = $Numero * $Numero;

		array_push($estatistica["VarianciasQuadrada"], $Numero);

	}

	foreach ($estatistica["VarianciasQuadrada"] as $varia) {
		
		$varia = round($varia,3);

	}

	$Soma = array_sum($estatistica["VarianciasQuadrada"]);

	$divisor = count($estatistica["VarianciasQuadrada"]);

	$divisor -= 1;

	$Fim = $Soma / $divisor;

	$Fim = sqrt($Fim);


	return $Fim;

}



?>
