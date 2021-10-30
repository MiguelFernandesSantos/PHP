<?php  

#####################################################
#                                                   #
#    NOME: MIGUEL FERNANDES SANTOS.                 #
#    DATA: 02/10/2021                               #
#    PROJETO: Calculo do IMC.                       #
#                                                   #
#####################################################

	$Dados = [
				"Peso" => 80,
				"Altura" => 1.75,
				"IMC" => null,
				"Interpretacao" => null,

			];

$Dados["Interpretacao"] = CalcularIMC($Dados);

echo "O seu IMC é classificado como: ";
print_r($Dados["Interpretacao"]); 

Function CalcularIMC ($Info){

	$Info["IMC"] = $Info["Peso"] / ($Info["Altura"] * 2);

	if ($Info["IMC"] < 18.5) {

		$Info["Interpretacao"] = "Magreza";

	}elseif($Info["IMC"] < 24.9){

		$Info["Interpretacao"] = "Normal";

	}elseif($Info["IMC"] < 29.9){

		$Info["Interpretacao"] = "Sobrepeso";

	}elseif($Info["IMC"] < 39.9){

		$Info["Interpretacao"] = "Obesidade";

	}else{

		$Info["Interpretacao"] = "Obesidade grave";

	}

	return $Info["Interpretacao"];

}

?>
