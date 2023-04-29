
<?PHP

	// ************************************************************************* \\
	// ********************************/ SWITCH /******************************* \\
	// ************************************************************************* \\


	/*
		Estructuras switch
		
		La sentencia switch es similar a una serie de sentencias IF en la misma expresión. En
		muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con
		muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que
		valor es igual. Para esto es exactamente la expresión switch.



	*/

	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	$varA = "Casa";
	
	// El switch evalúa de 1 condición y si es igual
	// La condición a evaluar es la colocamos en el paréntesis del mismo osea la variable 
	// Después evalúa en que case tiene que entrar 
	switch($varA){
		// En este caso va a entrar si la variable varA vale "Casa"
		case "Casa":
			print_r("Hola soy una casa");
			print_r("<br>\n");
			// Break es un punto de corte del swich 
			break;
		case "Arbol":
			print_r("Hola soy una casa");
			print_r("<br>\n");
			break;
		case "Edificio":
			print_r("Hola soy un Edificio");
			print_r("<br>\n");
			break;
		case "Contenedor":
			print_r("Hola soy un Contenedor");
			print_r("<br>\n");
			break;
		// Entra en default en caso que no se halla ejecutado ninguna de las opciones anteriores
		default:
			print_r("No soy ninguna de las anteriores");
			print_r("<br>\n");

	}

	
	
	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");



?>