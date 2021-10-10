<?php
//####################################################
//                                                   #
//   NOME: MIGUEL FERNANDES SANTOS.                  #
//   DATA: 10/10/2021                                #
//   PROJETO: INTEIROS IMPARES.                      #
//                                                   #
//####################################################


// DECLARAÇÃO DA VARIAVEL UTILIZADA PARA MOSTRAR OS NUMEROS IMPARES_
// MENORES OU IGUAL A ELA:
$Limite = random_int(10, 20);

echo "Numeros impares: <br>";
for ($Auxiliar = 1; $Auxiliar <= $Limite; $Auxiliar += 2){
    // A CADA VEZ QUE O LAÇO SE INICIA É COLOCADO NO CONSOLE O NUMERO:
	echo "$Auxiliar<br>";

}

?>
