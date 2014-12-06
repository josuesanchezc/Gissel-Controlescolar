<?php

require ('header.php');
require ('Grupo.php');

echo"<div class='container'>";	
		
		
		$Grupo = new	Grupo ();
	
		$Grupo->mostrar();
		$Grupo->listas();
		
		
	

			echo"</div>";


