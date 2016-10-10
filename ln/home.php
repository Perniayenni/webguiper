<?php
$app="home";
 	//header html
	require_once("../core/comun/inicios.php");
	// menu principal
	require_once("../core/menu/menu_main.php");
	// slider
	require_once("../apps/$app/slides/slide_$app.php");
	//core
	require_once("../apps/$app/core/core_$app.php");
		//Incluir js del home
	echo '<script src="../apps/'.$app.'/js/'.$app.'.js"></script>';
	echo '<script src="../core/js/main.js"></script>';
	//pie 
	require_once("../core/comun/pie.php");

?>