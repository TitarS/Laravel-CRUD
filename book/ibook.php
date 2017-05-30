<?php 

namespace book;

interface ibook
{
	public function getName(); 			// отримуємо назву книги
	public function setName($name);			// задаємо назву книги
	public function getId();			// отримуємо ідентифікатор
	public function getType();			// отримуєм розділ(тип) книги
	public function getAuthor();		// отримать автора
	public function getYear();			// отримать рік випуска книги
	public function getPage();			// кількість сторінок
	public function getCondition();		// якість книги
	public function reduceCondition();	// зменшити якість книг
	}