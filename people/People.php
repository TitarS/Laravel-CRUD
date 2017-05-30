<?php 

namespace people;


abstract class People {
	private $name;
	private $age;
	private $isMale;
	private $countBookRead;
	private $email;

	public function __construct($name, $age, $isMale, $countBookRead, $email) {
		$this->name = $name;
		$this->age = $age;
		$this->isMale = $isMale;
		$this->countBookRead = $countBookRead;
		$this->email = $email;
	}
	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}	
	public function getAge() {
		return $this->age;
	}
	public function setAge($age) {
		$this->age = $age;
	}	
	public function getIsMale() {
		return $this->isMale;
	}
	public function setIsMale($isMale) {
		$this->isMale = $isMale;
	}	
	public function getCountBookRead() {
		return $this->countBookRead;
	}
	public function setCountBookRead($countBookRead) {
		$this->countBookRead = $countBookRead;
	}	 
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
	}	

	public function readBook(ibook $book) {

	}	
	public function takeBook() {

	}
	public function returnBook() {

	}
 
	function __toString() {
		return '<h1>Посетитель библиотеки!</h1>'
				. 'Имя:' . $this->name . '<br>'
				. 'Возраст:' . $this->age . '<br>'
				. 'Пол:' . ($this->isMale ? 'мужской' : 'женский') . '<br>'
				. 'Прочитано книг:' . $this->countBookRead . '<br>'
				. 'Почта:' . $this->email . '<br>';
	}
}