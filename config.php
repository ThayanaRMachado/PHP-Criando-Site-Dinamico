<?php

	//Sempre q/ chamar uma classe vai carregar diretamente.
	$autoload = function($class){
		if($class == 'Email'){
			include('classes/phpmailer/PHPMailerAutoLoad.php');
		}
		include('classes/'.$class.'.php');//Estava faltando o . antes do php. Por isso estava dando erro.
	};

	spl_autoload_register($autoload);

	define('INCLUDE_PATH', 'http://localhost/Projeto1/');
?>