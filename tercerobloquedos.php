<html>
<head>
	<title>Ejercicio3</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
    
    
    $array = array ( );
    
    for ($i = 0; $i <= 19; $i++) { 
		$array[$i] = rand (0 , 300);
	}
    
    
    
	sort($array);
	echo "<h1 style='color:blue'>".$array[0]."</h1>";
	echo "<h1 style='color:green'>".$array[count($array)-1]."</h1>";
	echo "<h1 style='color:red'> Suma: ".array_sum($array)." Media: ".array_sum($array)/count($array)."</h1>";
	?>
</body>
</html>