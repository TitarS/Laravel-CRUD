<?php
$sysstart = microtime(true);
header("Content-Type: text/html; charset = utf-8");
use book\book;
use hall\Hall;
use people\Reader;

require_once 'vendor/autoload.php';
require_once 'Autoloader.php';
/*require_once 'book/ibook.php';
require_once 'book/book.php';*/



$book = new book('Hic et nunc', 'Ekhart Tolle', 'philosophy', 250, 100);

$reader = new Reader('Eric', 36, true, 76, 'markovik@gmail.com');

Library::getInstance(
	[
		new Hall('Малий хол', 40, 3, 50, [
			new book('Now', 'Echart Tolle', 'Ezoteric', 250, 100),
			new book('Now-update', 'Timmothy Brud', 'Introduction to OOP', 250, 100)
			]),
		new Hall('Великий хол', 80, 4, 150, [
			new book('Now', 'Echart Tolle', 'Ezoteric', 250, 100),
			new book('Now-update', 'Entony Robbins', 'Biznes', 250, 100)
			])
	],
	[
		new Reader('Serhii', 25, true, 10, 'titar@email.ua'),
		new Reader('Anastasia', 23, true, 20, 'titar@email.ua'),
	],
	'city Kyiv'
);

//print_r(Library::getInstance());
//d(Library::getInstance());
d($book);

Library::getInstance()->moveBook(0, 1, 'Now-update');

//echo Library::getInstance()->getPeople()[1];
/*
$library->getPeople()[1]->setName('Anastasiya Puliak');
echo $library->getPeople()[1];
echo $library->getHall()[0]->getbook()[0]->getName();
*/
echo  '<!--time_gen- '.round(( microtime(true) - $sysstart), 5). 's -/time_gen-->';