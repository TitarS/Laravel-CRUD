<?php

namespace hall;

class Hall {
	private $name;
	private $width;
	private $height;
	private $place;
	private $book = [];

	public function __construct($name, $width, $height, $place, $book) {
		$this->name = $name;
		$this->width = $width;
		$this->height = $height;
		$this->place = $place;
		$this->book = $book;
	}

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}	
	public function getWidth() {
		return $this->width;
	}
	public function setWidth($width) {
		$this->width = $width;
	}
	public function getHeight() {
		return $this->height;
	}
	public function setHeight($height) {
		$this->height = $height;
	}
	public function getPlace() {
		return $this->place;
	}
	public function setPlace($place) {
		$this->place = $place;
	}
	public function getBook() {
		return $this->book;
	}
	public function addBook(ibook $book) {
		$this->book[] = $book;
	}
		
	public function printAllBook() {
		echo 'Кількість книг в залі' . $this->name . 'дорівнює' . count($this->book);
	}
	public function deleteBookById() {
		
	}
	public function issetBookByName($name) {
		$return = false;
		foreach ($this->book as $book) {
			d($book);
		}
		return $return;
	}
}