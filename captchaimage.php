<?php
	$token = true;
	
	$str_datos = file_get_contents("words.json");
	$datos = json_decode($str_datos,true);
	$max = sizeof ($datos);
	$key1 = rand(0, $max -1); 
	$key2 = rand(0, $max -1);
	//$numero = rand(0,99);
	$word = strtolower($datos[$key1]) . ' ' .  strtolower($datos[$key2]);

	// 	Output captcha
	if ($token)
	{ 
		// Set correct header
		header("Content-type: image/jpeg");
	
		// Generate captcha
		//$captcha = captcha_generate_captcha($token);
		$captcha = $word;
		
		// Pick a random background image
		$available_bg = array(1,2,5);
		$n = rand(0, 2);
		$n = $available_bg[$n];
		$image = imagecreatefromjpeg(dirname(__FILE__) . "/img/captcha/backgrounds/bg$n.jpg");	
		
		// Create a colour (black so its not a simple matter of masking out one colour and ocring the rest)
		$colour = imagecolorallocate($image, 39,40,50);

		
		// Write captcha to image
		//imagestring($image, 5, 30, 4, $captcha, $black);
		imagettftext($image, 25, 3, 10, 50, $colour, dirname(__FILE__) . "/fonts/captcha.ttf", $captcha);
		
		// Output image
		imagejpeg($image);
		
		// Free memory
		imagedestroy($image);
	}
	exit;
?>