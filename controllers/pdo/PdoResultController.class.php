<?php

require_once "AbstractPdoController.class.php";

class PdoResultController extends AbstractPdoController {

	public function retrieveResult($description) {
		$results = array();
		//$description = '%'.$description.'%';
		$query = $this->pdo->prepare('SELECT * FROM  `websites` WHERE MATCH (keywords) AGAINST (:description IN BOOLEAN MODE) 
																ORDER BY (MATCH (keywords) AGAINST (:description IN BOOLEAN MODE)) DESC');
		$query->bindValue(':description', $description);
		$query->execute();
		
		
		while($result = $query->fetch(PDO::FETCH_OBJ)) {
			$website = new Result($result->id, $result->title, $result->description, $result->url, $result->keywords);
			$results[] = $website;
		}
		$query->closeCursor();
		return $results;
	}
	
	/*search: super man
	
	db: superman*/
	
	
	
}
?>