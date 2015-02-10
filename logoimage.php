<?php
	$type = 'favicon';
	if(isset($_GET['type'])){
		$type = $_GET['type'];
	}
	$color = 'black';
	if(isset($_GET['color'])){
		$color = $_GET['color'];
	}

	switch ($type) {
		case 'logotipo':
			$word = 'logotipo';
			if(isset($_GET['word'])){
				$word = $_GET['word'];
			}
			$params['size'] = array(
				'width' => 150,
				'height' => 50
			);
			//150/10 es solo una prueba error
			$image = @imagecreatetruecolor(strlen($word)*(150/10), 50);
			imagealphablending($image, false);
			imagesavealpha($image, true);
			$col=imagecolorallocatealpha($image,255,255,255,127);
			imagefill($image, 0, 0, $col);
			$xpos = 10;
			$ypos = 32;
			$fontfamily = "HelveticaNeue_Med";
			$size = 18;
			break;
		case 'isologo':
			$word = 'l';
			if(isset($_GET['word'])){
				$word = $_GET['word'];
			}
			$params['size'] = array(
				'width' => 50,
				'height' => 50
			);
			$image = imagecreatefrompng(dirname(__FILE__) . "/img/favicon/bg{$params['size']['width']}.png");	
			imageAlphaBlending($image, true);
			imageSaveAlpha($image, true);
			$xpos = 14;
			$ypos = 38;
			$fontfamily = "HelveticaNeue_Med";
			$size = 30;
			break;
		default:
			$word = 'f';
			if(isset($_GET['word'])){
				$word = $_GET['word'];
			}
			$params['size'] = array(
				'width' => 32,
				'height' => 32
			);
			//Favicon
			$image = imagecreatefrompng(dirname(__FILE__) . "/img/favicon/bg{$params['size']['width']}.png");	
			imageAlphaBlending($image, true);
			imageSaveAlpha($image, true);
			$xpos = 10;
			$ypos = 23;
			$fontfamily = "HelveticaNeueLight";
			$size = 18;
			break;
	}

	

	header("Content-type: image/png");

	
	// Create a colour (black so its not a simple matter of masking out one colour and ocring the rest)
	switch ($color) {
		case 'white':
			$colour = imagecolorallocate($image, 255,255,255);
			break;
		
		default:
			$colour = imagecolorallocate($image, 0,0,0);
			break;
	}
	
	imagettftext($image, $size, 0, $xpos, $ypos, $colour, dirname(__FILE__) . "/fonts/helvetica/{$fontfamily}.ttf", $word);
	
	// Output image
	imagepng($image);
	
	// Free memory
	imagedestroy($image);
	exit;
?>