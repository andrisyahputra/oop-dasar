<?php
require_once "data/Person.php";
define("APPLICATION", "belajar php oop pzn");
const APP_VERSION = "1.0.0";

$person2 = new Person("Andrimc", "Binjai");

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo Person::AUTHOR . PHP_EOL;
echo $person2->info();
