<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=estadisticas_db", "developer", "Developer911.");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':incidentetipologia'		=>	$_POST["incidentetipologia"]
		);

		$query = "
		INSERT INTO survey_table 
		(incidentetipologia) VALUES (:incidentetipologia)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT incidentetipologia, COUNT(ID) AS Total 
		FROM incidente 
		GROUP BY incidentetipologia
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'incidentetipologia'		=>	$row["incidentetipologia"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>