<?php

class Library {
	private $hall = [];
	private $people = [];
	private $address;

	/*DI Reader(2, 43, 25)*/
	private $readers;

	public function setReaders() {
		$this->readers = $reader;
	}


	/**
	* Паттерн "Синглтон"
	* @var $_instance;
	*/

	protected static $_instance;

	private function __construct(array $hall, array $people, $address) {
		$this->hall = $hall;
		$this->people = $people;
		$this->address = $address;

		//$this->address - не статичне поле;
	}

	public static function getInstance(array $hall = [], array $people = [], $address = '') {
		if (self::$_instance === null) {
			self::$_instance = new self($hall, $people, $address);
		}
		return self::$_instance;
	}

	/**
	* __wakeup використовується при оберненій серіалізаціїї об'єкта
	*/
	private function __wakeup() {

	}

	/**
	* Для того, щоб об'єкт не можна було зклонувати
	*/
	private function __clone() {

	}

	public function getHall() {
		return $this->hall;
	}
	public function getPeople() {
		return $this->people;
	}
	public function getAddress() {
		return $this->address;
	}

	public function moveBook($fromHallById, $toHallById, $bookName) {
		if(!isset($this->hall[$fromHallById])) {
			echo "Хола з Id = $fromHallById не існує!";
			return;
		}
		if(!isset($this->hall[$toHallById])) {
			echo "Хола з Id = $toHallById не існує!";
			return;
		}
		if ($fromHallById == $toHallById) {
			echo "Це один і той же хол!";
			return;
		}
		if(!$this->hall[$fromHallById]->issetBookByName($bookName)) {
			echo "Книги з назвою $bookName не існує!";
			return;
		}
	}
}