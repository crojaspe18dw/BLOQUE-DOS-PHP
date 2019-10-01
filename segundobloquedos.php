<html>
<head>
	<title>Ejercicio2</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
    
    
    $filas = 7;
	$columnas = 3;
    
    
    $final= "<table border = 1px>";
	for ($i = 0; $i <= $filas; $i++) { 
		$final.="<tr>";
		for ($j = 0; $j <= $columnas ; $j++)
			$final.="<td></td>";
		$final.="</tr>";	
	}
	$final.="</table>";
	echo $final;
	?>

</body>
</html>