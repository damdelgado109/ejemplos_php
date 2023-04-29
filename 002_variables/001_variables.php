<?php


	// ************************************************************************* \\
	// ******************************/ VARIABLES /****************************** \\
	// ************************************************************************* \\

	/*
		Una variable es un elemento donde se almacenas valores o dato. Los valores de las variable
		pueden ser modificados mediante la ejecución del programa. Si a una variable le asignamos
		otro valor, esta cambiará el valor o dato que tenga almacenado por el que le demos de nuevo.
		En PHP todas las variables empiezan con el símbolo de peso o dolar $. Este signo delante de
		cualquier texto indica que lo que viene detrás es una variable.
		Ej: $soyVariable
		Para asignar un valor a una variable basta con defenir la variable y agregarle un símbolo de “=”
		Ej: $soyVariable = 10; (Eso significa que mi variable vale 10)
	
	*/
	/*
	
		

	*/

	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");
	// Definimos una variable de tipo INT
	$varUno = 1;
	var_dump($varUno);
	print_r("<br>\n");
	
	// Volvemos a definir la variable varUno con el valor int de 128
	$varUno = 128;
	var_dump($varUno);
	print_r("<br>\n");

	// Definimos la misma variable varUno pero esta vez en 0
	$varUno = 0;
	var_dump($varUno);
	print_r("<br>\n");

	// Definimos variable de tipo int negativa
	$varUno = -15;
	var_dump($varUno);
	print_r("<br>\n");
	
	// Definimos una variable de tipo String o  cadena de texto
	$varDos = "Soy un texto";
	var_dump($varDos);
	print_r("<br>\n");

	// Definimos una variable de tipo float o Real
	$varTres = 4.5;
	var_dump($varTres);
	print_r("<br>\n");

	// Definimos variable de tipo boolean true
	$varCuatro = True;
	var_dump($varCuatro);
	print_r("<br>\n");

	// Definimos variable de tipo boolean False
	$varCinco = False;
	var_dump($varCinco);
	print_r("<br>\n");


	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");





?>