<?php
	
	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	require('vendor/autoload.php');

	define('INCLUDE_PATH_STATIC', 'http://localhost/dankicode/cursosWebDankiCode/DesenvolvimentoWebNovo/modulo_07/ProjetoSocial_2.0/DankiCode/Views/pages/');
	define('INCLUDE_PATH', 'http://localhost/dankicode/cursosWebDankiCode/DesenvolvimentoWebNovo/modulo_07/ProjetoSocial_2.0/');
	$app = new DankiCode\Application();

	$app->run();

?>