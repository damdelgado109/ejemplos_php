<?PHP

	// ************************************************************************* \\
	// ********************************/ WHILE /******************************** \\
	// ************************************************************************* \\

	/*
		Bucle while
		El bucle while ejecuta repeticiones de instrucciones un número indeterminado de
		veces. Incluso es posible que no llegue a realizarse ninguna repetición, ya que lo
		primero que se hace es evaluar la condición para arrancar el bucle, y si esta es
		falsa, el bucle no se inicia.
		La sintaxis es la palabra reservada while después viene una condición entre paréntesis 
		y entre llaves de apertura y cierre el código que se va a repetir

		while ("Condicion"){

			"Codigo"

		}

	*/

	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	//Defino una variable contadora 
	$varContadora = 0;

	// La condición nos indica que el bucle se va a repetir mientras la variable contadora sea menor a 10
	while($varContadora <= 10){

		// Mostramos el valor de la variable contadora
		print_r($varContadora);
		print_r("<br>\n");
		// Incrementamos en 1 nuestra variable contadora
		$varContadora++;

	}




	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");




?>