<?php

require_once "AbstractPdoController.class.php";

class PdoResultController extends AbstractPdoController {

	public function retrieveResult($description, $title) {
		$resultsWeb = array();		
		$query = sprintf("SELECT * FROM  `websites` WHERE MATCH (keywords, title, url) AGAINST ('%s' IN BOOLEAN MODE) 
						ORDER BY (MATCH (keywords) AGAINST ('%s' IN BOOLEAN MODE))+(MATCH (title) AGAINST ('%s' IN BOOLEAN MODE))+(MATCH (url) AGAINST ('%s' IN BOOLEAN MODE)) DESC", 
						mysql_real_escape_string($description), mysql_real_escape_string($description), mysql_real_escape_string($title), mysql_real_escape_string($title));


		$results = mysql_query($query);
		
		if (!$results) {
			$message  = 'Requête invalide : ' . mysql_error() . "\n";
			$message .= 'Requête complète : ' . $query;
			die($message);
		}
		while ($result = mysql_fetch_assoc($results)) {
			$website = new Result($result['id'], $result['title'], $result['description'], $result['url'], $result['keywords']);
			$resultsWeb[] = $website;
		}
		
		mysql_free_result($results);
		
		
		mysql_close($this->link);
		return $resultsWeb;
	}
	
}
?>