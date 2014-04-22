<?php
require_once 'required.php';

$resultController = ControllerFactory::getResultController();

$description = $_GET["description"];

$results = $resultController->retrieveResult($description);

foreach($results as $result) { 
	echo "
	<li class='resultat'>
		
			<a href='".$result->getUrl()."'>
				<h3>".$result->getTitle()."</h3>
				<p>".$result->getUrl()."</p>

				<div class='description'>
					<p>".$result->getDescription()."</p>
				</div>	

				<div class='keywords'>

				</div>
			</a>

	</li>


	";
}
?>