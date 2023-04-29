<?php


	// ************************************************************************* \\
	// **********************************/ IF /********************************* \\
	// ************************************************************************* \\

	/*
		Como se describe en la sección sobre expresiones, la expresión es evaluada a su
		valor booleano. Si la expresión se evalúa como true, PHP ejecutara la sentencia y si
		se evalúa como false la ignorara

		La sentencia de if se escribe de la siguiente manera
		* Primero utilizamos la palabra reservada if luego paréntesis curvos "()". Dentro del paréntesis 
			Tiene que tener una condición que su resultado tiene que booleano ósea true o false.
		* En caso de que la condición sea true se ejecutara el código que está entre las llaves "{}" 
			en caso contrario no se ejecutará el código que está entre las llaves "{}". 
		if(" Condicion "){


			Código que se ejecuta 

		}

	*/


	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	$varA = 5;
	$varB = 3;

	// Eveluo la condicion en este caso su la varaible $varA es mayor a variable $varB 
	if($varA > $varB){
		// En caso que la condicion sea verdadera ejecuto lo que esta dentros las llaves { }
		print_r("Se cumplio la condicion de varA es mayor a varB");
		print_r("<br>\n");

	}

	// En este if evaluo las condicion si varA es mayor a 8 o varB es menor a 9
	if($varA > 8 || $varB < 9){

		print_r("Se cumplio la condicion de varA es mayor 8 o varB < 9");
		print_r("<br>\n");

	}

	// En este if evaluo las condicion si varA es mayor a 8 y varB es menor a 9
	if($varA > 8 && $varB < 9){

		print_r("Se cumplio la condicion de varA es mayor 8 y varB < 9");
		print_r("<br>\n");

	}// En este caso no se esta cumpliendo la condicion por lo tanto no se va a mostrar en pantalla.s



	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");



?>