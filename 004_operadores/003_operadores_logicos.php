<?php


	// ************************************************************************* \\
	// ************************/  OPERADORES LOGICOS  /************************* \\
	// ************************************************************************* \\

	/*
		Los operadores lógicos permiten formular solucionar complejas a partir de condiciones simples.	
		Los operadores lógicos llevan las regalas de las compuertas lógicas a los lenguajes de programación.
		
		And (y): Es verdadero(True) si A y B son verdaderos (True) para todos los demás casos va a dar falso(False). Ej: $a && $b
		Or (o inclusivo): Es verdadero(True) si cualquiera de A o B es verdedero(True) para todos los demás casos va a dar falso(False). Ej: $a || $b
		Xor (o exclusivo): Es verdadero si $a o $b es true, pero no ambos para todos los demás casos va a dar falso(False). Ej: $a xor $b
		Not (no): Lo que hace es dar vuelta el resultado. En caso de ser verdadero lo devuelve es falso y en caso de falso lo devuleve verdadero. EJ: !$a

		* El operador XOR se comporta igual que OR (Creo que es un FIX de php en general)
		
	*/

	


	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	// Definos vadirables para trabajar
	$varVerdadera 	= true;
	$varFalsa 		= false;
	$varVerdaderaDos = true;
	$varFalsaDos 	= false;

	// Muestro el valor de cada variable
	print_r("Variable varVerdadera = ");
	var_dump($varVerdadera);
	print_r("<br>\n");
	print_r("Variable varFalsa = ");
	var_dump($varFalsa);
	print_r("<br>\n");
	print_r("Variable varVerdaderaDos = ");
	var_dump($varVerdaderaDos);
	print_r("<br>\n");
	print_r("Variable varFalsaDos = ");
	var_dump($varFalsaDos);
	print_r("<br>\n");


	print_r("------------------------------<br>\n");

	// Realaizamos el && con la variable Verdadera(True) && variable Falsa(False) y guardo el resultado en la variable respuesta
	$respuesta = $varVerdadera && $varFalsa;
	print_r('El resultado de $varVerdadera && $varFalsa: ');
	var_dump($respuesta);
	print_r("<br>\n");

	// Realaizamos el && con la variable Verdadera(True) && variable Verdadera(True) y guardo el resultado en la variable respuesta
	$respuesta = $varVerdadera && $varVerdaderaDos;
	print_r('El resultado de $varVerdadera && $varVerdaderaDos: ');
	var_dump($respuesta);
	print_r("<br>\n");

	// Realaizamos el Or con la variable Falsa(False) && variable Verdadera(True) y guardo el resultado en la variable respuesta
	$respuesta = $varFalsa && $varVerdadera;
	print_r('El resultado de $varFalsa && $varVerdadera: ');
	var_dump($respuesta);
	print_r("<br>\n");

	// Realaizamos el Or con la variable Falsa(False) || variable Falsa(False) y guardo el resultado en la variable respuesta
	$respuesta = $varFalsa && $varFalsaDos;
	print_r('El resultado de $varFalsa && $varFalsaDos: ');
	var_dump($respuesta);
	print_r("<br>\n");

	print_r("------------------------------<br>\n");

	// Realaizamos el Or con la variable Verdadera(True) || variable Falsa(False) y guardo el resultado en la variable respuesta
	$respuesta = $varVerdadera || $varFalsa;
	print_r('El resultado de $varVerdadera || $varFalsa: ');
	var_dump($respuesta);
	print_r("<br>\n");

	// Realaizamos el Or con la variable Verdadera(True) || variable Verdadera(True) y guardo el resultado en la variable respuesta
	$respuesta = $varVerdadera || $varVerdaderaDos;
	print_r('El resultado de $varVerdadera || $varVerdaderaDos: ');
	var_dump($respuesta);
	print_r("<br>\n");

	// Realaizamos el Or con la variable Falsa(False) || variable Verdadera(True) y guardo el resultado en la variable respuesta
	$respuesta = $varFalsa || $varVerdadera;
	print_r('El resultado de $varFalsa || $varVerdadera: ');
	var_dump($respuesta);
	print_r("<br>\n");

	// Realaizamos el Or con la variable Falsa(False) || variable Falsa(False) y guardo el resultado en la variable respuesta
	$respuesta = $varFalsa || $varFalsaDos;
	print_r('El resultado de $varFalsa || $varFalsaDos: ');
	var_dump($respuesta);
	print_r("<br>\n");

	print_r("------------------------------<br>\n");

	
	// Validamos si varVerdadera XOR varFalsa y guardo el resultado en la variable respuesta
	$respuessta = $varVerdadera xor $varFalsa;
	print_r('El resultado de $varVerdadera XOR $varFalsa: ');
	var_dump($respuesta);
	print_r("<br>\n");

	// Validamos si varVerdadera XOR varVerdaderaDos y guardo el resultado en la variable respuesta
	$respuesta = $varVerdadera xor $varVerdaderaDos;
	print_r('El resultado de $varVerdadera XOR $varVerdaderaDos: ');
	var_dump($respuesta);
	print_r("<br>\n");

	// Validamos si varFalsa XOR varVerdadera y guardo el resultado en la variable respuesta
	$respuesta = $varFalsa xor $varVerdadera;
	print_r('El resultado de $varFalsa XOR $varVerdadera: ');
	var_dump($respuesta);
	print_r("<br>\n");

	// Validamos si varFalsa XOR varFalsaDos y guardo el resultado en la variable respuesta
	$respuesta = $varFalsa xor $varFalsaDos;
	print_r('El resultado de $varFalsa XOR $varFalsaDos: ');
	var_dump($respuesta);
	print_r("<br>\n");

	print_r("------------------------------<br>\n");

	// Lo que hacemos es NOT a la variable varFalsa que su valor es falso(false) y guardo el resultado en la variable respuesta
	$respuesta = !$varFalsa;
	print_r('El resultado de !$varFalsa: ');
	var_dump($respuesta);
	print_r("<br>\n");

	// Lo que hacemos es NOT a la variable varVerdadera que su valor es verdadero(true) y guardo el resultado en la variable respuesta
	$respuesta = !$varVerdadera;
	print_r('El resultado de !$varVerdadera: ');
	var_dump($respuesta);
	print_r("<br>\n");



	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");

?>