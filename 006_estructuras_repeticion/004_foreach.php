<?PHP

	// ************************************************************************* \\
	// *******************************/ FOREACH /******************************* \\
	// ************************************************************************* \\

	/*

		 El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, 
		 y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.

		El foreach tiene la sintaxis de la palabra reservada foreach un parentesis y dentro el parentesis va
		primero el array que queremos recorrer luedo un as y luego le indicamos una variable que va ser guarde el
		resultado de cada iteraccion


		foreach("Variable array a recorrer" as "variable "){


		}

		Otra forma de utilizar el foreach es esta forma
		
		foreach("Variable array a recorrer" as "clave" => "variable "){


		}

		Cada lugar en el array esta compuesto por una clave y un valor. Cuando iteramos el foreach se recorre todos los lugares del array.
		En cada iteracion la clave (o pocicion del arrat) y el valor es el valor de esa clave.

		Tener en cuenta que la variable $clave y $valor despues del foreach desaparecen 

		foreach($array as $clave => $valor){

		}


	*/


	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");


	//Defino un array de animales
	$arrayAnimales = array("Gato", "Perro", "Mono", "Elefante", "Loro", "Conejo");
	print_r($arrayAnimales);

	print_r("<br>\n");
	print_r("---------------------------------------<br>\n");

	// Para recorrerlo le indico el foreach 
	foreach($arrayAnimales as $animales){

		print_r("$animales");
		print_r("<br>\n");

	}

	print_r("<br>\n");
	print_r("---------------------------------------<br>\n");
	print_r("<br>\n");


	// El otro ejemplo donde utilizamos la clave el valor del array
	foreach($arrayAnimales as $clave => $animales){

		print_r("Clave:".$clave." - Valor:".$animales);
		print_r("<br>\n");

	} 

	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");




?>