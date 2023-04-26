<?php


	// ************************************************************************* \\
	// ************************/ OPERADORES ARISMETICOS /*********************** \\
	// ************************************************************************* \\

	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	// Devifinos la 
	$varUno = 5;
	$varDos = 3;
	
	print_r("Variable Uno = ".$varUno."\n");
	print_r("<br>\n");
	print_r("Variable Dos = ".$varDos."\n");
	print_r("<br>\n");
	var_dump($varUno);
	print_r("<br>\n");
	var_dump($varDos);
	print_r("<br>\n");
	
	$varResultado = 5 + 3;
	print_r("El resultado de 5 + 3 = ".$varResultado."\n");
	var_dump($varResultado);

	$varResultado = 5 - 3;
	print_r("El resultado de 5 - 3 = ".$varResultado."\n");
	var_dump($varResultado);

	$varResultado = 5 * 3;
	print_r("El resultado de 5 * 3 = ".$varResultado."\n");
	var_dump($varResultado);

	$varResultado = 5 / 3;
	print_r("El resultado de 5 / 3 = ".$varResultado."\n");
	var_dump($varResultado);

	$varResultado = 5 % 3;
	print_r("El resultado de 5 % 3 = ".$varResultado."\n");
	var_dump($varResultado);

	$varResultado = -$varUno;
	print_r("El resultado de -5 = ".$varResultado."\n");
	var_dump($varResultado);



	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");

?>