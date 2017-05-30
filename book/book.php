<?php

namespace book;

class book implements ibook{
	private $id;
	private $name; 
	private $author; 
	private $type; 
	private $countPage; 
	private $condition;
	private $year; 
	private $page;

	public function __construct($name, $author, $type, $countPage, $condition) {
		$this->name = $name;
		$this->author = $author;
		$this->type = $type;
		$this->countPage = $countPage;
		$this->condition = $condition;
	} 

 	public function getName() {
 		return $this->name;
 	}
 	public function setName($name){
 		$this->name = $name;
 	}
 	public function getId(){
 		return $this->id;
 	}
 	public function getType(){
 		return $this->type;
 	}
 	public function getAuthor(){
 		return $this->author;
 	}
 	public function getYear(){
 		return $this->year;
 	}
 	public function getPage(){
 		return $this->page;
 	}
 	public function getCondition(){
 		return $this->condition;
 	}
 	public function reduceCondition(){
 		if($this->condition<=0){
 			return; 
 		}
 		$this->condition--;
 	}
}