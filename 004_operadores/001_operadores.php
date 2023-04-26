<?php
	/*
		OperadoresOperadores
		* Un operador es algo que toma uno más valores (o expresiones, en la jerga de
		programación) y produce otro valor (de modo que la construcción en si misma se
		convierte en una expresión).
		* Los operadores se pueden agrupar de acuerdo con el número de valores que
		toman. Los operadores unarios toman sólo un valor, por ejemplo ! (el operador
		lógico de negación) o ++ (el operador de incremento). Los operadores binarios
		toman dos valores, como los familiares operadores aritméticos + (suma) y - (resta),
		y la mayoría de los operadores de PHP entran en esta categoría. Finalmente, hay
		sólo un operador ternario, ? :, el cual toma tres valores; usualmente a este se le
		refiere simplemente como "el operador ternario" (aunque podría tal vez llamarse
		más correctamente como el operador condicional)

		Los operadores pueden ser
		* Operadores de asignacion
		* Operadores aritmeticos		
		* Operadores bit a bit
		* Operadores de comparacion
		* Operadores de control de errores
		* Operadores de ejecucion
		* Operadores de incremento/decremento
		* Operadores lógicos
		* Operadores para strings
		* Operadores para arrays
		* Operadores de tipo


	*/

	// ************************************************************************* \\
	// *************************/ OPERADORES ASIGNACION /*********************** \\
	// ************************************************************************* \\

	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	// A la variable $varA le asignamos el valor numérico 2
	$varA = 2;
	var_dump($varA);
	print_r("<br>\n");	
	// A la variable $varA le sumamos el numero 7
	$varA += 7; 
	var_dump($varA);
	print_r("<br>\n");
	
	// -------------------------------------------------------- \\
	print_r("---------<br>\n");
	// Ahora definimos la variable varB con valor numerico 5
	$varB = 5;
	var_dump($varB);
	print_r("<br>\n");
	// Incrementamos en 1 la variable varB con el ++
	$varB++;
	var_dump($varB);
	print_r("<br>\n");
	// Decrementamos en 1 la variable varB con el --
	$varB--;
	var_dump($varB);
	print_r("<br>\n");
	

	// -------------------------------------------------------- \\
	print_r("---------<br>\n");
	// A la variable $varC le asignamos el valor numerico 10
	$varC = 10;
	var_dump($varC);
	print_r("<br>\n");	
	// A la variable $varC le restamos el numero 7
	$varC -= 7; 
	var_dump($varC);
	print_r("<br>\n");

	// -------------------------------------------------------- \\
	print_r("---------<br>\n");
	// A la variable varD se asignamos el string “Hola ”
	$varD = "Hola ";
	var_dump($varD);
	print_r("<br>\n");
	// Despues le concatemos el string “PHP!” 
	$varD .= "PHP!";
	var_dump($varD);
	print_r("<br>\n");


	// -------------------------------------------------------- \\
	print_r("---------<br>\n");
	// Vamos a definir la variable varE con el string "Buenos Dias"
	$varE = "Buenos Dias ";
	var_dump($varE);
	print_r("<br>\n");
	// Ahora vamos a concatenar ese buenos con un string "¿como andas?" y esto lo vamos a guardar en una variable varF 
	$varF = $varE." ¿como andas?";
	var_dump($varF);




	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");

?>