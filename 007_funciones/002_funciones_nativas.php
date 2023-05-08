<?PHP

	// ************************************************************************* \\
	// ***************************/ FUNCIONES NATIVAS /************************* \\
	// ************************************************************************* \\

	/*
		Funciones NativasFunciones Nativas
		Las Funciones Nativas en PHP son funciones propias del lenguaje que están
		definidas. Algunas de función esta funciones están atadas a exenciones php lo cual
		para que anden hay que tener la extensión activa.
		Otra cosa importante a tener en cuenta algunas funciones pueden llegar a variar el
		funcionamiento según la versión de PHP o inclusive ser deprecada.(Eliminadas)
		

	*/


	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");


		// ----------------/ print_r() \-------------------\\ 
		// print_r() : Esta funcion imprime en pantalla texto para ser legible
		print_r("print_r()");
		print_r("<br>\n");
		print_r("Estoy imprimiendo en pantalla");
		print_r("<br>\n");

		print_r("---------------------------------------<br>\n");

		
		// ----------------/ round() \-------------------\\ 
		// round: Esta función nos permitirá hacer redondeo, osea recibirá como parámetro un número y si el valor después del punto (o de la coma) es menor a 50 redondeará para abajo, de lo contrario lo hará un número más:
	
		print_r("round()");
		print_r("<br>\n");
		// Primero hacemos el round de varA que 5.3 y el redondeo nos deveria dar 5
		$varA = 5.3;
		$resultado = round($varA);
		print_r($resultado);
		print_r("<br>\n");

		// El siguente caso 6.7 nos var el dedondeo en 7
		$varB = 6.7;
		$resultado = round($varB);
		print_r($resultado);
		print_r("<br>\n");

		// El caso 6.5 nos var el dedondeo en 7
		$varC = 6.5;
		$resultado = round($varB);
		print_r($resultado);
		print_r("<br>\n");

		print_r("---------------------------------------<br>\n");

		// ----------------/ floor() \-------------------\\ 
		// floor(): Esta función también hará un redondeo pero siempre para abajo no importa si numero despues de la coma(",") es mayor a 5:

		// Primero hacemos el round de varA que 5.3 y el redondeo nos deveria dar 5
		print_r("floor()");
		print_r("<br>\n");

		$varA = 5.3;
		$resultado = floor($varA);
		print_r($resultado);
		print_r("<br>\n");

		// El siguente caso 6.7 nos var el dedondeo en 6
		$varB = 6.7;
		$resultado = floor($varB);
		print_r($resultado);
		print_r("<br>\n");

		// El caso 6.5 nos var el dedondeo en 6
		$varC = 6.5;
		$resultado = floor($varB);
		print_r($resultado);
		print_r("<br>\n");

		
		print_r("---------------------------------------<br>\n");

		// ----------------/ ceil() \-------------------\\ 
		// ceil(): Esta función también hará un redondeo pero siempre hacia arriba no importa si numero despues de la coma(",") es menor a 5:

		// Primero hacemos el round de varA que 5.3 y el redondeo nos deveria dar 5
		print_r("ceil()");
		print_r("<br>\n");

		$varA = 5.3;
		$resultado = ceil($varA);
		print_r($resultado);
		print_r("<br>\n");

		// El siguente caso 6.7 nos var el dedondeo en 6
		$varB = 6.7;
		$resultado = ceil($varB);
		print_r($resultado);
		print_r("<br>\n");

		// El caso 6.5 nos var el dedondeo en 6
		$varC = 6.5;
		$resultado = ceil($varB);
		print_r($resultado);
		print_r("<br>\n");

		print_r("---------------------------------------<br>\n");

		// ----------------/ rand() \-------------------\\ 
		// La función rand() es una de las más útiles que hay. Esta función generará un número al azar que irá desde un rango desde/hasta. 
		//Por ejemplo si quisiéramos devolver un número desde el 1 al 9 (inclusive)
		print_r("rand()");
		print_r("<br>\n");

		$numero_al_azar = rand(1, 9);
		print_r($numero_al_azar);
		print_r("<br>\n");



	



		/*
		
		print_r("<br>\n-----------------------<br>\n");
		$varVerdadera = 'False';

		print_r("<br>\n-----------------------<br>\n");

		$nombres = array('Juan', 'Pedro', 'Maria', 'Jorge', 'Ana');
		sort($nombres);
		foreach($nombres as $item){
			echo $item . '<br />';
		}
		print_r("<br>\n-----------------------<br>\n");

		$nombres = array(15,27, 35,12, 28);
			sort($nombres);
			foreach($nombres as $item){
			echo $item . '<br />';
		}
		
		print_r("<br>\n-----------------------<br>\n");
		$nombres = array('Juan', 'Pedro', 'Maria', 'Jorge', 'Ana');
		rsort($nombres);
		foreach($nombres as $item){
			echo $item . '<br />';
		}

		print_r("<br>\n-----------------------<br>\n");
		$nombres = array('Juan', 'Pedro', 'Maria', 'Jorge', 'Ana');
		shuffle($nombres);
		foreach($nombres as $item){
			echo $item . '<br />';
		}

		print_r("<br>\n-----------------------<br>\n");
		$nombres = array('Juan', 'Sofia', 'Maria', 'Jorge', 'Ana');
		array_push($nombres, 'Carlos');
		print_r($nombres);
		array_push($nombres, 'Felipe');
		array_push($nombres, 'Antonela');
		print_r($nombres);

		print_r("<br>\n-----------------------<br>\n");
		$nombres = array('Juan', 'Pedro', 'Maria', 'Jorge', 'Ana');
		$nombre_a_buscar = 'eeeee';
		if(in_array($nombre_a_buscar, $nombres)){
			echo 'El nombre se encuentra en la lista';
		}else{
			echo 'El nombre NO se encuentra en la lista';
		}

		print_r("<br>\n-----------------------<br>\n");
		$nombres = array('Juan', 'Pedro', 'Maria', 'Jorge', 'Ana');
		$nombres_total = count($nombres);
		echo $nombres_total;


		print_r("<br>\n-----------------------<br>\n");
		$paisesCadena = 'Argentina - Bolivia - Brasil - Chile - Paraguay - Uruguay';
		$paisesArreglo = explode('-', $paisesCadena);
		print_r($paisesCadena);
		print_r($paisesArreglo);


		print_r("<br>\n-----------------------<br>\n");
		$paises_arreglo = array('Colombia', 'Ecuador', 'Peru', 'Venezuela');
		$paisesCadena = implode(' - ', $paises_arreglo);
		echo $paisesCadena;

		*/


	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");

?>