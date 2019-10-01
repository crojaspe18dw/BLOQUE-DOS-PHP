<html>
<head>
	<title>Ejercicio15</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
    
    $a = "manzana pera limón sandía melón";
    
    
    $array = array();
	$string = explode(' ', $a);
	for ($i = 0; $i < count($string); $i++)
		
		$array[$string[$i]] = strlen($string[$i]);
	?>

</body>
</html>