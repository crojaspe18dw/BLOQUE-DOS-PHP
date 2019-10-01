<head>
	<title>Ejercicio1</title>
	<meta charset="utf-8">
</head>

<body>

    <?php
    //declaracion de arraylis
	$arrayuno = array();
    $arraydos = array();
    
 
	for ($i = 0; $i < 10; $i++) {
		array_push($arrayuno, $i);
		array_push($arraydos, funcion($i));
	}
    
    
    
    function funcion($p)
	{
		$a = 1;
		for ($j = 1; $j <= $p; $j++)
			$a =$a * $j;
		return $a;
	}
	?>

</body>

</html>