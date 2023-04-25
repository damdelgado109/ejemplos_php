<?php

	// ************************************************************************* \\
	// ******************************/ CONSTANTES /***************************** \\
	// ************************************************************************* \\


	/*

		Una constante es un valor que definimos al principio de la ejecucion y no va variando a lo 
		largo de la ejecucion. Las constantes por recomendacion siempre estan escritas en mayusculas.
		Para definir una constante empesamos con la palabra define( 1* , 2* ) despues esperea 2 valores.
		1) El primer valor es el nombre que va a recibir la constante 
		2) El segundo valor es el valor que se le va a asignar a la constante

		Al igual que las variables las constantes pueden ser de distintos tipos

	*/

	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	// Definimos una constante SOYCONSTANTE 
	define("SOYCONSTANTE", "Soy una constante");
	print_r(SOYCONSTANTE);
	print_r("<br>\n");


	// Definimos una constante numerica INT
	define("SOYNUMERO", 10);
	var_dump(SOYNUMERO);
	print_r("<br>\n");

	// Definimos una constante float o real
	define("SOYFLOAT", 15.3);
	var_dump(SOYFLOAT);
	print_r("<br>\n");


	// Definimos una constante de Texto 
	define("SOYTEXTO", "Soy un texto");
	var_dump(SOYTEXTO);
	print_r("<br>\n");

	// Definimos una constante boolean verdadera 
	define("SOYVERDADERO", True);
	var_dump(SOYVERDADERO);
	print_r("<br>\n");

	// Definimos una constante boolean falsa 
	define("SOYFALSO", True);
	var_dump(SOYFALSO);
	print_r("<br>\n");

	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");

?>