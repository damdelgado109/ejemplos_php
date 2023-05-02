<?PHP

	// ************************************************************************* \\
	// *********************************/ FOR /********************************* \\
	// ************************************************************************* \\

	/*
		El bucle for realiza repeticiones de instrucciones mientras se cumple una
		determinada condición.
		Necesitamos especificarle tres parámetros para que funcione:
		* La inicialización.
		* La condición de la repetición.
		* La actualización que varíe el cumplimiento de la condición.
	
		for ("Variable contadora" ; "Condicion" ; "Variacion contadora"){

			"Codigo"

		}

	*/

	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	// Definimos una variable contadora $i y la inicializamos en 0
	// Ponemos la condicion que $i tiene que ser menor igual a 10
	// Incrementamos nuestra variable contadora $i en 1  
	for($i = 0; $i <= 10; $i++){

		// Imprimimos en pantalla el valor de $i
		print_r($i);
		print_r("<br>\n");

	}




	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");




?>