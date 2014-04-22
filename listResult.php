<?php
	require_once 'required.php';
	
	$resultController = ControllerFactory::getResultController();
	
	$description = $_GET["description"];
	
	$words = explode(" ", $description);
	
	$results = array();

	for($i=0; $i<count($words); $i++){
		$alreadyprint = false;
		for($j=0; $j<count($results); $j++)
		{
			for($k=0; $k<count($resultController->retrieveResult($words[$i])); $k++)
			{
				if ($resultController->retrieveResult($words[$i])[$k] == $results[$j])
				{
					$alreadyprint = true;
				}
			}
		}
		if ($alreadyprint == false)
		{
			$results = array_merge($results, $resultController->retrieveResult($words[$i]));
		}
	}

	
	foreach($results as $result) { 
		echo "
			<a href='".$result->getUrl()."'>
				<div class='resultat'>	
					<h3>".$result->getTitle()."</h3>
					<h6>".$result->getUrl()."</h6>
					
					<div class='description'>
						<p>".$result->getDescription()."</p>
					</div>	
					
					<div class='keywords'>
						 
					</div>
				</div>
			</a>

		";
	}

	//d
?>