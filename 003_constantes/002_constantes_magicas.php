<?php

	// ************************************************************************* \\
	// **************************/ CONSTANTES MAGICAS /************************* \\
	// ************************************************************************* \\

	/*
		Una constante mágica o predefinidas se puede llamar en cualquier
		script en ejecución. Muchas de estas constantes son creadas por
		diferentes extensiones, y sólo estarán presentes si dichas
		extensiones están disponibles.
	*/

	print_r("\n\n<br><br> ************** INICIO ************** <br><br>\n\n");
	// Esto va a mostrar el numero de linea que estas parado
	var_dump(__LINE__);
	print_r("<br>\n");	

	// Esto va a mostrar la ruta absoluta del archivo
	var_dump(__FILE__);
	print_r("<br>\n");	

	// Esto va a mostrar la ruta absoluta del directororio donde se encuentra
	var_dump(__DIR__);
	print_r("<br>\n");	

	/*
		Hay mas constantes magicas pero es necesario saber mas de PHP para poder utilizarlas y entenderlas 
	*/ 
	print_r("\n\n<br><br> *************** FIN *************** <br><br>\n\n");


?>