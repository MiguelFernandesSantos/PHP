<?php

#####################################################
#                                                   #
#    NOME: MIGUEL FERNANDES SANTOS.                 #
#    DATA: 03/09/2021                               #
#    PROJETO: CALCULO DE HOLERITE (DIDATICO).       #
#                                                   #
#####################################################


	$Holerite = [
					"Funcionario" => [
										"Nome" => "Miguel Fernandes Santos",
										"Salario" => 5000,
										"HoraExtra" =>75,
										"Dependentes" => 1,
										"Insalubridade" => 0,
										"Periculosidade" => 0,
										"ValeTransporte" => 6,
									],

					"MesTrabalhado" => [
										"QtsHrsEx" => 5,
										"QtsFaltas" => 2,
										"QtsAtrasos" => 1,
										],

						"Calculo" => [
										"SalarioDia" => null,
										"SalarioHora" => null,
										"HrExtra" => null,
										"DsrHrExtra" => null,
										"ValorInsalubridade" => null,
										"ValorPericulosidade" => null,
										"Falta" => null,
										"DsrFalta" => null,
										"ValorVT" => null,
										"Atraso" => null,
										"ValorDependente" => null,
										"INSS" => null,
										"FGTS" => null,
										"IRRF" => null,
										"SalarioLiquido" => null,
									],
				];

	$IMPOSTOS =[

				//ARRAY DO INSS COMPOSTO PELAS FAIXAS E A PORCENTAGEM
					"INSS" => [
									"Faixa_INSS" => [
										"Faixa1.1" => 1100.00, 
										"Faixa2.1" => 1100.01, 
										"Faixa2.2" => 2203.48, 
										"Faixa3.1" =>2203.49, 
										"Faixa3.2" => 3305.22, 
										"Faixa4.1" => 3305.23, 
										"Faixa4.2" => 6433.57,
										"Teto" => 6433.27,
									], 

									"Porcentagem" => [
										"Faixa1" => 7.5,
										"Faixa2" => 9.0,
										"Faixa3" => 12,
										"Faixa4" => 14,
										"Valor_Teto" => 751.97,
									],

									"Deduzir" => [
										"Faixa1" => 0,
										"Faixa2" => 16.50,
										"Faixa3" => 82.604,
										"Faixa4" => 148,708

									],
								],

					//ARRAY DO IRRF COMPOSTO PELAS FAIXAS E A PORCENTAGEM
					"IRRF" => [
									"Faixa_IRRF" => [
										"Faixa1.1" => 1903.98, 
										"Faixa2.1" => 1903.99, 
										"Faixa2.2" => 2826.65, 
										"Faixa3.1" =>2826.66, 
										"Faixa3.2" => 3751.05, 
										"Faixa4.1" => 3751.06, 
										"Faixa4.2" => 4664.68,
										"Teto" => 4664.68,
									], 

									"Porcentagem" => [
										"Faixa1" => 0,
										"Faixa2" => 7.5,
										"Faixa3" => 15,
										"Faixa4" => 22.5,
										"Valor_Teto" => 27.5,
									],

									"Deduzir" => [
										"Faixa1" => "Isento",
										"Faixa2" => 142.80,
										"Faixa3" => 354.80,
										"Faixa4" => 636.13,
										"Faixa5" => 869.36,

									],
								],

					//ARRAY DO FGTS
					"FGTS" => [
								"Faixa" => 8,
								],

					"Base_Calculo" => [
										"Base_INSS" => null, 
										"Base_IRRF" => null,
									],	
			];

// Salario Dia:
$Holerite["Calculo"]["SalarioDia"] = $Holerite["Funcionario"]["Salario"] / 30;
$Holerite["Calculo"]["SalarioDia"] = round($Holerite["Calculo"]["SalarioDia"],2);

//Salario Hora:
$Holerite["Calculo"]["SalarioHora"] = $Holerite["Funcionario"]["Salario"] / 220;
$Holerite["Calculo"]["SalarioHora"] = round($Holerite["Calculo"]["SalarioHora"],2);

//Hora Extra:
$Holerite["Calculo"]["HrExtra"] = ((($Holerite["Calculo"]["SalarioHora"] / 100) * $Holerite["Funcionario"]["HoraExtra"]) +$Holerite["Calculo"]["SalarioHora"]) * $Holerite["MesTrabalhado"]["QtsHrsEx"];
$Holerite["Calculo"]["HrExtra"] = round($Holerite["Calculo"]["HrExtra"],2);

//DSR HR EXTRA:
$Holerite["Calculo"]["DsrHrExtra"] = ($Holerite["Calculo"]["HrExtra"] / 26) *4;
$Holerite["Calculo"]["DsrHrExtra"] = round($Holerite["Calculo"]["DsrHrExtra"],2);

//INSALUBRIDADE:
$Holerite["Calculo"]["ValorInsalubridade"] = (1100 / 100) * $Holerite["Funcionario"]["Insalubridade"];
$Holerite["Calculo"]["ValorInsalubridade"] = round($Holerite["Calculo"]["ValorInsalubridade"],2);


//PERICULOSIDADE:
$Holerite["Calculo"]["ValorPericulosidade"] = ($Holerite["Funcionario"]["Salario"] / 100) * $Holerite["Funcionario"]["Periculosidade"];
$Holerite["Calculo"]["ValorInsalubridade"] = round($Holerite["Calculo"]["ValorInsalubridade"],2);

//VALE TRANSPORTE:
$Holerite["Calculo"]["ValorVT"] = ($Holerite["Funcionario"]["Salario"] / 100) * $Holerite["Funcionario"]["ValeTransporte"];
$Holerite["Calculo"]["ValorVT"] = round($Holerite["Calculo"]["ValorVT"],2);

//FALTA:
$Holerite["Calculo"]["Falta"] = $Holerite["Calculo"]["SalarioDia"] * $Holerite["MesTrabalhado"]["QtsFaltas"];
$Holerite["Calculo"]["Falta"] = round($Holerite["Calculo"]["Falta"],2);

//DSR FALTA:
$Holerite["Calculo"]["DsrFalta"] = $Holerite["Calculo"]["Falta"];

//ATRASO:
$Holerite["Calculo"]["Atraso"] = $Holerite["Calculo"]["SalarioHora"] * $Holerite["MesTrabalhado"]["QtsAtrasos"];
$Holerite["Calculo"]["Atraso"] = round($Holerite["Calculo"]["Atraso"],2);

//DEPENDENTES:
$Holerite["Calculo"]["ValorDependente"] = $Holerite["Funcionario"]["Dependentes"] * 189.59;
$Holerite["Calculo"]["ValorDependente"] = round($Holerite["Calculo"]["ValorDependente"],2);

// BASE CALCULO INSS:
$IMPOSTOS["Base_Calculo"]["Base_INSS"] = $Holerite["Funcionario"]["Salario"] +
										 $Holerite["Calculo"]["ValorInsalubridade"] +
										 $Holerite["Calculo"]["ValorPericulosidade"] +
										 $Holerite["Calculo"]["HrExtra"] +
										 $Holerite["Calculo"]["DsrHrExtra"] -
										 $Holerite["Calculo"]["Falta"] -
										 $Holerite["Calculo"]["DsrFalta"] -
										 $Holerite["Calculo"]["Atraso"];

$IMPOSTOS["Base_Calculo"]["Base_INSS"] = round($IMPOSTOS["Base_Calculo"]["Base_INSS"],2);

//CHAMAR FUNÇÃO INSS:
$Holerite["Calculo"]["INSS"] = CalcularInss($IMPOSTOS["Base_Calculo"]["Base_INSS"],$Holerite, $IMPOSTOS);

//FGTS:
$Holerite["Calculo"]["FGTS"] = ($IMPOSTOS["Base_Calculo"]["Base_INSS"] / 100 ) * $IMPOSTOS["FGTS"]["Faixa"];
$Holerite["Calculo"]["FGTS"] = round($Holerite["Calculo"]["FGTS"],2);

//BASE IRRF:
$IMPOSTOS["Base_Calculo"]["Base_IRRF"] = $IMPOSTOS["Base_Calculo"]["Base_INSS"] -
										 $Holerite["Calculo"]["INSS"] -
										 $Holerite["Calculo"]["ValorDependente"];

$IMPOSTOS["Base_Calculo"]["Base_IRRF"] = round($IMPOSTOS["Base_Calculo"]["Base_IRRF"],2);

//CHAMAR A FUNÇÃO IRRF:
$Holerite["Calculo"]["IRRF"] = CalcularIrrf($IMPOSTOS["Base_Calculo"]["Base_IRRF"],$Holerite,$IMPOSTOS);

//SALARIO LIQUIDO:							
$Holerite["Calculo"]["Salario_Liquido"] = $Holerite["Funcionario"]["Salario"] +
										  $Holerite["Calculo"]["HrExtra"] +
										  $Holerite["Calculo"]["DsrHrExtra"] +
										  $Holerite["Calculo"]["ValorInsalubridade"] + 
										  $Holerite["Calculo"]["ValorPericulosidade"] - 
										  $Holerite["Calculo"]["ValorVT"] - 
										  $Holerite["Calculo"]["Falta"] - 
										  $Holerite["Calculo"]["DsrFalta"] - 
										  $Holerite["Calculo"]["Atraso"] - 
										  $Holerite["Calculo"]["INSS"] - 
										  $Holerite["Calculo"]["IRRF"];


$Holerite["Calculo"]["Salario_Liquido"] = round($Holerite["Calculo"]["Salario_Liquido"],2);
print_r($Holerite["Calculo"]["Salario_Liquido"]);




function CalcularInss ($Base, $Holerite, $IMPOSTOS){

$INSS = null;

	if ($IMPOSTOS["Base_Calculo"]["Base_INSS"] < $IMPOSTOS["INSS"]["Faixa_INSS"]["Faixa1.1"]) {

		# PRIMEIRA FAIXA DO INSS
		$INSS = ($Base /100) * $IMPOSTOS["INSS"]["Porcentagem"]["Faixa1"];
		$INSS = $INSS - $IMPOSTOS["INSS"]["Deduzir"]["Faixa1"];

	}elseif ($IMPOSTOS["Base_Calculo"]["Base_INSS"] > $IMPOSTOS["INSS"]["Faixa_INSS"]["Faixa2.1"] AND $IMPOSTOS["Base_Calculo"]["Base_INSS"] < $IMPOSTOS["INSS"]["Faixa_INSS"]["Faixa2.2"]) {

		# SEGUNDA FAIXA DO INSS
		$INSS = ($Base /100) * $IMPOSTOS["INSS"]["Porcentagem"]["Faixa2"];
		$INSS = $INSS - $IMPOSTOS["INSS"]["Deduzir"]["Faixa2"];

	}elseif ($IMPOSTOS["Base_Calculo"]["Base_INSS"] > $IMPOSTOS["INSS"]["Faixa_INSS"]["Faixa3.1"] AND $IMPOSTOS["Base_Calculo"]["Base_INSS"] < $IMPOSTOS["INSS"]["Faixa_INSS"]["Faixa3.2"]) {

		# TERCEIRA FAIXA DO INSS
		$INSS = ($Base /100) * $IMPOSTOS["INSS"]["Porcentagem"]["Faixa3"];
		$INSS = $INSS - $IMPOSTOS["INSS"]["Deduzir"]["Faixa3"];

	}elseif ($IMPOSTOS["Base_Calculo"]["Base_INSS"] > $IMPOSTOS["INSS"]["Faixa_INSS"]["Faixa4.1"] AND $IMPOSTOS["Base_Calculo"]["Base_INSS"] < $IMPOSTOS["INSS"]["Faixa_INSS"]["Faixa4.2"]) {

		# QUARTA FAIXA DO INSS
		$INSS = ($Base /100) * $IMPOSTOS["INSS"]["Porcentagem"]["Faixa4"];
		$INSS = $INSS - $IMPOSTOS["INSS"]["Deduzir"]["Faixa4"];
	
	}else{

		# TETO DO INSS
		$INSS = $IMPOSTOS["INSS"]["Porcentagem"]["Valor_Teto"];
		
	}

	$INSS = round($INSS,2);
	Return $INSS;

}




function CalcularIrrf ($Base, $Holerite, $IMPOSTOS){

$IRRF = null;

	if ($IMPOSTOS["Base_Calculo"]["Base_IRRF"] < $IMPOSTOS["IRRF"]["Faixa_IRRF"]["Faixa1.1"]) {
		
		# ISENTO
		$IRRF = 0;	

	}elseif ($IMPOSTOS["Base_Calculo"]["Base_IRRF"] > $IMPOSTOS["IRRF"]["Faixa_IRRF"]["Faixa2.1"] AND $IMPOSTOS["Base_Calculo"]["Base_IRRF"] < $IMPOSTOS["IRRF"]["Faixa_IRRF"]["Faixa2.2"]) {

		#FAIXA 2
		$IRRF = ($IMPOSTOS["Base_Calculo"]["Base_IRRF"] /100) * $IMPOSTOS["IRRF"]["Porcentagem"]["Faixa2"];
		$IRRF = $IRRF - $IMPOSTOS["IRRF"]["Deduzir"]["Faixa2"];

	}elseif ($IMPOSTOS["Base_Calculo"]["Base_IRRF"] > $IMPOSTOS["IRRF"]["Faixa_IRRF"]["Faixa3.1"] AND $IMPOSTOS["Base_Calculo"]["Base_IRRF"] < $IMPOSTOS["IRRF"]["Faixa_IRRF"]["Faixa3.2"]) {
		
		#FAIXA 3
		$IRRF = ($IMPOSTOS["Base_Calculo"]["Base_IRRF"]/100) * $IMPOSTOS["IRRF"]["Porcentagem"]["Faixa3"];
		$IRRF = $IRRF - $IMPOSTOS["IRRF"]["Deduzir"]["Faixa3"];

	}elseif ($IMPOSTOS["Base_Calculo"]["Base_IRRF"] > $IMPOSTOS["IRRF"]["Faixa_IRRF"]["Faixa4.1"] AND $IMPOSTOS["Base_Calculo"]["Base_IRRF"] < $IMPOSTOS["IRRF"]["Faixa_IRRF"]["Faixa4.2"]) {
		
		#FAIXA 4
		$IRRF = ($IMPOSTOS["Base_Calculo"]["Base_IRRF"] /100) * $IMPOSTOS["IRRF"]["Porcentagem"]["Faixa4"];
		$IRRF = $IRRF - $IMPOSTOS["IRRF"]["Deduzir"]["Faixa4"];

	}else{

		#FAIXA 5 
		$IRRF = ($IMPOSTOS["Base_Calculo"]["Base_IRRF"] /100) * $IMPOSTOS["IRRF"]["Porcentagem"]["Faixa5"];
		$IRRF = $IRRF- $IMPOSTOS["IRRF"]["Deduzir"]["Faixa5"];

	}

	$IRRF = round($IRRF,2);
	return $IRRF;

}

  ?>
