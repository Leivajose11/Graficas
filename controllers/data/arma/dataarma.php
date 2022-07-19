<?php

//SELECT tipologianombre, COUNT(tipologiaid) AS Total FROM incidente, tipologia WHERE incidentefechasuceso BETWEEN '$fecha_desde' AND '$fecha_hasta' AND incidenteid = incidente_id GROUP BY tipologianombre

$connect = new PDO("mysql:host=localhost;dbname=estadisticas_db", "root", "");
 //$fecha_desde=$_GET["fecha_desde"];
   // $fecha_hasta=$_GET['fecha_hasta'];

if(isset($_POST["action"]))
{

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT incidentearma, COUNT(ID) AS Total 
		FROM incidente WHERE incidentearma = 'Fuego' or incidentearma = 'Blanca' or incidentearma = 'Indeterminado'
		 GROUP BY incidentearma
	
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'incidentearma'		=>	$row["incidentearma"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>
