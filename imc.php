<?php 
		$peso = 90;
		$altura = 1.89;
		
		$conta1 = $altura*$altura;
		$conta2 = $peso/$conta1;
		
		$resultado = number_format($conta2);
		
		if(isset($resultado) && $resultado != '0'){;	
			echo '<h1>Seu IMC é:</h1>';
			echo '<h2>'.$resultado.'</h2>';
		}else{
			echo '<h1>Por favor, utilize apenas numeros!</h1>';	
		}
		?>