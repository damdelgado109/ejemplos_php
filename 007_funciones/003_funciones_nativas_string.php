<?PHP

	// ************************************************************************* \\
	// ***********************/ FUNCIONES NATIVAS STRING /********************** \\
	// ************************************************************************* \\

	/*
		En este caso veremos las funciones nativas para trabajar los string
	*/


	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	
		print_r("---------------------------------------<br>\n");

		print_r("Funciones String<br>\n");

		print_r("---------------------------------------<br>\n");

		// ----------------/ strtoupper() \-------------------\\ 
		// Convierte toda la cadena de texto en mayúscula:

		print_r("strtoupper()");
		print_r("<br>\n");

		$palabra = 'Me encantan correr en la rambla.';
		$palabraMayuscula = strtoupper($palabra);
		print_r($palabraMayuscula);
		print_r("<br>\n");

		print_r("---------------------------------------<br>\n");

		// ----------------/ strtolower() \-------------------\\ 
		// Convierte toda la cadena de texto en minúsculas:

		print_r("strtolower()");
		print_r("<br>\n");

		$palabra = 'Me encantan CORRER en la RAMbla.';
		$palabraMayuscula = strtolower($palabra);
		print_r($palabraMayuscula);
		print_r("<br>\n");
		

		print_r("---------------------------------------<br>\n");

		// ----------------/ ucfirst() \-------------------\\ 
		// En este caso, esta función sólo nos convertirá la primer letra de una cadena en mayúscula

		print_r("ucfirst()");
		print_r("<br>\n");

		$palabra = 'hola hoy es un lindo día';
		$resultado = ucfirst($palabra);
		print_r($resultado);
		print_r("<br>\n");


		print_r("---------------------------------------<br>\n");

		// ----------------/ ucwords() \-------------------\\ 
		// En este caso, esta función sólo nos convertirá la primer letra de una cadena en mayúscula

		print_r("ucwords()");
		print_r("<br>\n");

		$palabra = 'hola hoy es un lindo día';
		$resultado = ucwords($palabra);
		print_r($resultado);
		print_r("<br>\n");


		print_r("---------------------------------------<br>\n");

		// ----------------/ strlen() \-------------------\\ 
		// En este caso, esta función sólo nos convertirá la primer letra de una cadena en mayúscula

		print_r("strlen()");
		print_r("<br>\n");

		$palabra = 'hola hoy es un lindo día para salir a correr a la rambla';
		$resultado = strlen($palabra);
		print_r($resultado);
		print_r("<br>\n");


		print_r("---------------------------------------<br>\n");
		// ----------------/ substr() \-------------------\\ 
		// Esta función nos permite cortar la cadena de texto según nuestra necesidades. 
		/*
			Esta función recibe 3 parámetros 
				substr(Texto, Inicio, Largo)
				1) texto(String): Es la cadena que se va a manipular
				2) Inicio(INT): Es el punto de origen donde voy a empezar a cortar
				2.1) Cuando el valor es positivo cuenta la posición del principio al final, la cantidad de caracteres
				2.2) Cuando el valor es negativo empieza a contar la posición desde el final hacia principio
				3) Largo(INT): Es el largo de cadena que se va a cortar
				3.1) En caso de ser valor positivo cuenta la cantidad de caracteres hacia el final desde el punto de origen 
					y determina el punto de corte.
				3.2) En caso de ser valor negativo cuenta la cantidad de caracteres desde el final hacia el punto de origen
					para determinar donde se hace el corte

		*/
		$texto = 'hola hoy es un lindo día para salir a correr a la rambla';

		/*
			En este ejemplo que lo hacemos le indicamos que el punto de inicio es el principio de la cadena
			y que va a tener un largo de caracteres.
		*/
		$textoCortado = substr($texto, 0, 11);
		var_dump($textoCortado);
		print_r("<br>\n");

		/*
			En este caso le indicamos que vamos a salir de la posición 9 y vamos a traer 8 caracteres
		*/
		$textoCortado = substr($texto, 9, 8);
		var_dump($textoCortado);
		print_r("<br>\n");

		
		/*	
			En este caso le indicamos que vamos a salir de la posición 18 contando del final y vamos a traer 6 caracteres
		*/
		$textoCortado = substr($texto, -18, 6);
		var_dump($textoCortado);
		print_r("<br>\n");

		/*
			En el siguiente caso vamos a 
			En el siguiente caso vamos a 
		*/ 
		$textoCortado = substr($texto, 10, -4);
		var_dump($textoCortado);
		print_r("<br>\n");

		/*
			Otra forma de utilizar esta funcion es simplmente pasandole el cadena a recortar y el origen del corte
		*/
		$textoCortado = substr($texto, -15);
		var_dump($textoCortado);
		print_r("<br>\n");


		print_r("---------------------------------------<br>\n");

		// ----------------/ str_replace() \-------------------\\ 
		// Esta función nos permite buscar una texto para despues remplazarlo
		/*
			Esta función recibe 3 parámetros 
				str_replace( A buscar, Remplazo, Texto)
				1) texto(String) A buscar: Es la cadena que se va a manipular
				2) texto(Strin) Nuevo: Es el texto que va a sustituir el anterior
				3) Texto: Es el string donde se va a buscar el texto a remplazar por uno nuevo

		*/
		$frase = 'hola hoy es un lindo día para salir a correr a la rambla';
		// En este caso voy a remplazar los espacion en blancos por guines bajos (_)
		$fraseModificada = str_replace(' ', '_', $texto);
		print_r($fraseModificada);
		print_r("<br>\n");

		print_r("---------------------------------------<br>\n");

		// ----------------/ trim() \-------------------\\ 
		// Esta función quitas los espacions al principio y al final de la cadena		
		$cadena = ' Hola ';
		$cadenaCortada = trim($cadena);
		var_dump($cadena);
		var_dump($cadenaCortada);
	


	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");

?>