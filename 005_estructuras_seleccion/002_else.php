
<?PHP

	// ************************************************************************* \\
	// *********************************/ ELSE /******************************** \\
	// ************************************************************************* \\


	/*
		Estructuras else
		Con frecuencia se desea ejecutar una sentencia si una determinada condición se
		cumple y una sentencia diferente si la condición no se cumple. Esto es para lo que
		sirve else. El else extiende una sentencia if para ejecutar una sentencia en caso de que
		la expresión en la sentencia if se evalúe como false. Por ejemplo, el siguiente código
		deberá mostrar a es mayor que b si $a es mayor que $b y a NO es mayor que b en
		el caso contrario

		La sintaxis es muy parecida la a sintaxis del if la diferencia que no termina la primera llave de cierre 
		sino que lo que hace es agregar un else y después haber y cierra llave "{ }". Para ejecutar el código que está después de
		las llaves else es necesario que la condición del if no se cumpla. En caso de que la condición del if se cumpla no
		se va a ejecutar el else 
		if(){

		}else{

		}



	*/

	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	$varA = 2;
	$varB = 3;

	// Eveluo la condicion en este caso su la varaible $varA es mayor a variable $varB 
	if($varA > $varB){
		// En caso que la condicion sea verdadera ejecuto lo que esta dentros las llaves { }
		print_r("Se cumplio la condicion de varA es mayor a varB");
		print_r("<br>\n");

	}else{
		// Como no se esta cumpliendo la condicion del if se entra al este else 		
		print_r("No se cumplio la condicion de varA es mayor a varB");
		print_r("<br>\n");

	}


	// Eveluo la condicion en este caso su la varaible $varA sea igaul a 2 y variable $varB menor que 5
	if($varA == 2 && $varB < 5 ){
		// En caso que la condicion sea verdadera ejecuto lo que esta dentros las llaves { }
		print_r("Se cumplio la condicion de varA es igual a 2 y varB es menor que 5");
		print_r("<br>\n");

	}else{
		// Como no se esta cumpliendo la condicion del if se entra al este else 		
		print_r("No se cumplio la condicion varA es igual a 2 y varB es menor que 5");
		print_r("<br>\n");

	}

	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");



?>