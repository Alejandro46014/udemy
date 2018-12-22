<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
	
</head>

<body>
	
	<?php 
	include_once('includes/libreria/libreria.php');
	
	$programas=programa_categoria();
	foreach($programas as $programa){
		echo($programa['cat_evento']."<br>");
	}
	?>
</body>
</html>