
<?PHP

	// ************************************************************************* \\
	// ********************************/ ELSEIF /******************************* \\
	// ************************************************************************* \\


	/*
		Estructuras else
		
		Elseif, como su nombre lo sugiere, es una combinación de if y else. Del mismo
		modo que else, extiende una sentencia if para ejecutar una sentencia diferente en
		caso que la expresión if original se evalúe como false. Sin embargo, a diferencia de
		else, esa expresión alternativa sólo se ejecutará si la expresión condicional del elseif
		se evalúa como true. Por ejemplo, el siguiente código debe mostrar a es mayor que
		b, a es igual que b o a es menor que b:



	*/

	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	$varA = 15;
	$varB = 3;


	// Evaluó la condición en este caso su la variable $varA es mayor a 50 
	if($varA >= 50){
		// En caso que la condicion sea verdadera ejecuto lo que esta dentros las llaves { }
		print_r("Se cumplio la condicion de varA es mayor igual a 50");
		print_r("<br>\n");


	// Acá vuelvo a hacer otra evaluación en el elseif	
	// Y la condición nueva es que si $varA es mayor a 30
	}elseif($varA > 30){

		// En caso de cumplirse la condición varA es mayor a 30 entra en este elseif
		print_r("Se cumplio la condicion de varA es mayor a 30 y menor a 50");
		print_r("<br>\n");

	// En el caso de que no se cumpla que varA es mayor a 30 evaluaríamos la siguiente condición
	// Si varA es mayor a 20 
	}elseif($varA > 20){
		// En caso de que no se cumplan las siguiente condiciones anteriores, pero si se cumple que varA > 20
		// Entramos en esta sección y las siguientes sentencias
		print_r("Se cumplio la condicion de varA es mayor a 20 y menor a 30");
		print_r("<br>\n");

	}else{
		// En caso que ninguna de las condiciones anteriores se cumpliese se entra en este else y se ejecuta el siguente codigo
		print_r("Se cumplio la condicion de varA es mayor a 20 y menor a 30");
		print_r("<br>\n");

	}


	
	
	
	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");



?>