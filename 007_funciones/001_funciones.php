<?PHP

	// ************************************************************************* \\
	// ******************************/ FUNCIONES /****************************** \\
	// ************************************************************************* \\

	/*
		En programación, una función es un conjunto de instrucciones a la que podemos
		recurrir siempre que queramos. Estas pueden recibir parámetros y realizar todo
		tipo de tareas, ya sean complejas o sencillas. La enorme biblioteca de funciones
		que posee PHP nos permite realizar, de forma muy fácil, muchas de las tareas
		habituales a la hora de desarrollar una aplicación. Sin embargo, siempre viene
		bien saber cómo crear e implementar nuestras propias funciones 
		
		Para definir funciones primero utilizo la palabra reservada function y después le asigno un nombre
		seguido después de eso van paréntesis curvos y posteriormente llaves. 
		Dentro las llaves va el código que se va a ejecutar cuando llamo a la función

		function miFuncion(){
			
			"Codigo a ejecutarse"

		}

		Ejecuto mi funcion
		MiFincion();

	*/


	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");


		// Defino mi primera función llamada primeraFuncion
		function primeraFuncion(){

			// Esta funcion lo unico que va a hacer es imprimir en pantalla mi primera function
			print_r("Mi primera funcion");
			print_r("<br>\n");

		}

		//Llamó a la función creada anteriormente
		primeraFuncion();



	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");

?>