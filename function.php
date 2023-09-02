<?php
require_once "data/Person.php";
$person2 = new Person("Andrimc", "Binjai");

$person2->sayHello("Andri");
// $person2->sayHello(null); //eror kalau nul
$person2->haiNama("Andri");
$person2->haiNama(null);
