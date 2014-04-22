<?php

class Result {
	
	private $id;
	private $title;
	private $description;
	private $url;
	private $keywords;
		
	public function __construct($id, $title, $description, $url, $keywords) {
		$this->id = $id;
		$this->title = $title;
		$this->description = $description;
		$this->url = $url;
		$this->keywords = $keywords;
	}
	
	public function getId() { return $this->id; } 
	public function setId($x) { $this->id = $x; } 
	
	public function getTitle() { return $this->title; } 
	public function setTitle($x) { $this->title = $x; } 

	public function getDescription() { return $this->description; } 
	public function setDescription($x) { $this->description = $x; } 
		
	public function getUrl() { return $this->url; } 
	public function setUrl($x) { $this->url = $x; } 
	
	public function getKeyword() { return $this->keywords; } 
	public function setKeyword($x) { $this->keywords = $x; } 
	

	
}

?>