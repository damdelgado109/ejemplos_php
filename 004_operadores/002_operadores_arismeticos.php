<?php


	// ************************************************************************* \\
	// ************************/ OPERADORES ARISMETICOS /*********************** \\
	// ************************************************************************* \\

	/*
		Los Operadores aritméticos son los operadores matemáticos que nos sirven para realizar operaciones aritméticas

		Identidad: Conversión de $a a int o float según el caso. Ej: +$a 
		Negación: Opuesto de $a. Ej: -$a 	
		Adición: Suma de $a y $b. Ej: $a + $b 	
		Sustracción: Diferencia de $a y $b. Ej: $a - $b 	
		Multiplicación:	Producto de $a y $b. Ej: $a * $b 
		División: Cociente de $a y $b. Ej: $a / $b (Tener en cuenta por regla matemática no se puede dividir entre 0)	
		Módulo:	Resto de $a dividido por $b. Ej: $a % $b (Tener en cuenta por regla matemática no se puede dividir entre 0)		
		Exponenciación:	Resultado de elevar $a a la potencia $bésima.  Ej: $a ** $b

	*/


	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	// Devifinos las variables varUno con el valor 5 y varDos con el valor 3
	$varUno = 5;
	$varDos = 3;
	
	// Mostramos el valor de las variables definidas
	print_r("Variable Uno = ".$varUno."\n");
	print_r("<br>\n");
	print_r("Variable Dos = ".$varDos."\n");
	print_r("<br>\n");
	var_dump($varUno);
	print_r("<br>\n");
	var_dump($varDos);
	print_r("<br>\n");
	print_r("---------<br>\n");



	// Primero realizo la operacion suma entre 2 int directamente y guardo el resultado en la variable varResultado
	$varResultado = 5 + 3;
	print_r("El resultado de 5 + 3 = ".$varResultado."<br>\n");
	var_dump($varResultado);
	print_r("<br>\n");
	
	// Primero hacemos la suma de las 2 variables y guardo el resultado en la variable varResultado
	$varResultado = $varUno + $varDos;
	print_r("El resultado de 5 + 3 = ".$varResultado."<br>\n");
	var_dump($varResultado);
	print_r("<br>\n");
	print_r("---------<br>\n");

	// Realizo la resta 5 - 3 con numeros y guardo el resultado en la variable varResultado
	$varResultado = 5 - 3;
	print_r("El resultado de 5 - 3 = ".$varResultado."<br>\n");
	var_dump($varResultado);
	print_r("<br>\n");

	// Realizo la resta entre 2 variable y guardo el resultado en la variable varResultado
	$varResultado = $varUno - $varDos;
	print_r("El resultado de 5 - 3 = ".$varResultado."<br>\n");
	var_dump($varResultado);
	print_r("<br>\n");
	print_r("---------<br>\n");

	// Realizo la multiplicación entre el numero 5 y el nuero 3 y guardo el resultado en la variable varResultado
	$varResultado = 5 * 3;
	print_r("El resultado de 5 * 3 = ".$varResultado."<br>\n");
	var_dump($varResultado);
	print_r("<br>\n");
	
	// Realizo la multiplicación entre varUno y varDos y guardo el resultado en la variable varResultado
	$varResultado = $varUno * $varDos;
	print_r("El resultado de 5 * 3 = ".$varResultado."<br>\n");
	var_dump($varResultado);
	print_r("<br>\n");
	
	print_r("---------<br>\n");

	// Realizo la división den 5 entre 3 y guardo el resultado en la variable varResultado
	$varResultado = 5 / 3;
	print_r("El resultado de 5 / 3 = ".$varResultado."<br>\n");
	var_dump($varResultado);
	print_r("<br>\n");

	// El resultado de la de dividir la variable varUno (5) y la variable varDos (3) y guardo el resultado en la variable varResultado
	$varResultado = $varUno / $varDos;
	print_r("El resultado de 5 / 3 = ".$varResultado."<br>\n");
	var_dump($varResultado);
	print_r("<br>\n");

	print_r("---------<br>\n");

	// El resto de dividir 5 entre 3 y guardo el resultado en la variable varResultado
	$varResultado = 5 % 3;
	print_r("El resto de 5 % 3 = ".$varResultado."<br>\n");
	var_dump($varResultado);
	print_r("<br>\n");

	// El resto de dividir la variable varUno (5) y la variable varDos (3) y guardo el resultado en la variable varResultado
	$varResultado = $varUno % $varDos;
	print_r("El resto de 5 % 3 = ".$varResultado."<br>\n");
	var_dump($varResultado);
	print_r("<br>\n");


	print_r("---------<br>\n");

	// Simplemente hacemos Negación de la variable varUno y me cambia el numero a negativo
	$varResultado = -$varUno;
	print_r("El la negacion de $varUno = ".$varResultado."<br>\n");
	var_dump($varResultado);
	print_r("<br>\n");


	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");

?>