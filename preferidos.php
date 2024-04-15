<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabla de datos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>

<div class="container">
	</br>
  	<table class="table table-striped">
	<?php
		$xml = simplexml_load_file("preferidos.xml");
		$json = json_encode($xml);
		$un_array = json_decode($json,TRUE);

		
		foreach($un_array["preferido"] as $preferido){
			if ($preferido["id_usuario"] == $_GET["id_usuario"]){
				echo $preferido["id_recurso"];
				echo "</br>";
			}	
		}
		
		
		
	?>
	</table>	
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
	
	
	


	
	
