<!DOCTYPE html>

<html>
	<head> 
		<title>PHP</title>
	</head>
	<body>
        
		<?php
			$vueltas = $_GET['num']; //Para leer el parámetro que venía en la dirección (e.g. ?num=50)

            echo  '<h1> Me has pedido que salude ' . $vueltas . ' veces. </h1>';

			for ($i = 0; $i < $vueltas; $i++) {
				echo '<p>' . $i . ' - ¡Hola Mundo!</p>';
			}
		?>
	</body>
</html>