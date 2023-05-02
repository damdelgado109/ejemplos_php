<?PHP

	// ************************************************************************* \\
	// *********************************/ FOR /********************************* \\
	// ************************************************************************* \\

	/*
		Los bucles do-while son muy similares a los bucles while, excepto que la expresión
		verdadera es verificada al final de cada iteración en lugar que al principio. La
		diferencia principal con los bucles while es que está garantizado que corra la
		primera iteración de un bucle do-while (la expresión verdadera solo es verificada
		al final de la iteración), mientras que no necesariamente va a correr con un bucle
		while regular (la expresión verdadera es verificada al principio de cada iteración,
		si se evalúa como false justo desde el comienzo, la ejecución del bucle terminaría
		inmediatamente).

		do{


		}while("Condicion")


	*/


	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");


	//Defino una variable contadora 
	$varContadora = 0;

	//Iniciamos el do-while
	do{

		// Mostramos el valor de la variable contadora
		print_r($varContadora);
		print_r("<br>\n");
		// Incrementamos en 1 nuestra variable contadora
		$varContadora++;

	// La condición nos indica que el bucle se va a repetir mientras la variable contadora sea menor a 10
	}while($varContadora <= 10);	


	
	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");

?>