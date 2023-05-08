<?PHP

	// ************************************************************************* \\
	// ************************/ FUNCIONES NATIVAS ARRAY /********************** \\
	// ************************************************************************* \\

	/*
		En este caso veremos las funciones nativas para trabajar los string
	*/


	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");

	
		print_r("---------------------------------------<br>\n");

		print_r("Funciones Array<br>\n");

		print_r("---------------------------------------<br>\n");

		$arrayPaises = array('Uruguay', 'Brasil', 'Ecuador', 'Cuba', 'Argentina','Chile');
		foreach($arrayPaises as $item){
			print_r($item);
			print_r("<br>\n");
		}


		print_r("<br>\n-----------------------<br>\n");
		// ----------------/ sort() \-------------------\\ 
		// La función sort() permite ordenar el array segun su valor de forma acendente. 
		
		$nombres_paises = count($arrayPaises);
		print_r($nombres_paises);
		print_r("<br>\n");


		print_r("<br>\n-----------------------<br>\n");

		// ----------------/ sort() \-------------------\\ 
		// La función sort() permite ordenar el array segun su valor de forma acendente. 

		sort($arrayPaises);
		foreach($arrayPaises as $item){
			print_r($item);
			print_r("<br>\n");
		}		

		print_r("<br>\n-----------------------<br>\n");

		// ----------------/ rsort() \-------------------\\ 
		// La función sort() permite ordenar el array segun su valor de forma decendete. 
		rsort($arrayPaises);
		foreach($arrayPaises as $item){
			print_r($item);
			print_r("<br>\n");
		}

		print_r("<br>\n-----------------------<br>\n");

		// ----------------/ shuffle() \-------------------\\ 
		// La función sort() permite ordenar el array segun su valor de forma aleatorea. 
		shuffle($arrayPaises);
		foreach($arrayPaises as $item){
			print_r($item);
			print_r("<br>\n");
		}
		
		print_r("<br>\n-----------------------<br>\n");

		// ----------------/ array_push() \-------------------\\ 
		// La función array_push() permite agregar claves a nuestro array de una forma ordenada
		$nombres = array('Juan', 'Sofia', 'Maria', 'Jorge', 'Ana');
		print_r($nombres);
		print_r("<br>\n");
		array_push($nombres, 'Carlos');
		print_r($nombres);
		print_r("<br>\n");
		array_push($nombres, 'Felipe');
		array_push($nombres, 'Antonela');
		print_r($nombres);
		print_r("<br>\n");

		print_r("<br>\n-----------------------<br>\n");

		// ----------------/ in_array() \-------------------\\ 
		// La función in_array() permite buscar por el valor en un array 
		/*
			Esta funcion recive 2 parametros 
				1) El string a bucar
				2) El array que voy a buscar
		*/
		$pais = 'Uruguay';
		if(in_array($pais, $arrayPaises)){
			echo 'El pais se encuentra en la lista';
		}else{
			echo 'El pais NO se encuentra en la lista';
		}
		print_r("<br>\n");

		print_r("<br>\n-----------------------<br>\n");
		// ----------------/ explode() \-------------------\\ 
		// La función explode() te permite covertir un string en array, para eso tomo un seprador y
		// cada vez que encuentra ese separador crea un clave en el array y sigue con la siguente
		/*
			Esta funcion recive 2 parametros 
				1) El separador para los cortes en el texto
				2) La cadena de texto a convertir
		*/
		
		$paisesCadena = 'Argentina - Bolivia - Brasil - Chile - Paraguay - Uruguay';
		$paisesArreglo = explode('-', $paisesCadena);
		print_r($paisesCadena);
		print_r("<br>\n");
		print_r($paisesArreglo);
		print_r("<br>\n");

		print_r("<br>\n-----------------------<br>\n");

		// ----------------/ implode() \-------------------\\ 
		// La función implode() te permite concatenar un array rapidamente usando un separador.
		/*
			Esta funcion recive 2 parametros 
				1) El separador para unir los valores de las claves del array
				2) El array a convertir en texto
		*/

		$paises_arreglo = array('Colombia', 'Ecuador', 'Peru', 'Venezuela');
		print_r($paises_arreglo);
		print_r("<br>\n");
		$paisesCadena = implode(' - ', $paises_arreglo);
		print_r($paisesCadena);
		print_r("<br>\n");


	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");

?>