<html>
<head>
	<title>Ejercicio5</title>
	<meta charset="utf-8">
</head>

<body>

	<?php
	
    $array = array(
		"Enero" => "",
		"Febrero" => "",
		"Marzo" => "",
		"Abril" => "",
		"Mayo" => "",
		"Junio" => "",
		"Julio" => "",
		"Agosto" => "",
		"Septiembre" => "",
		"Octubre" => "",
		"Noviembre" => "",
		"Diciembre" => ""
	);
    
    $ano = 1997;
    
    $n=1;
	foreach($a as $b => $c){
		$a[$b] = cal_days_in_month(CAL_GREGORIAN, $n, $ano);
		$n++;
	}
	
	print_r($a);
	?>

</body>

</html>