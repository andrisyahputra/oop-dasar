<?php
require_once "data/Person.php";

$array = [
    "nama_depan" => "Andri",
    "nama_belakang" => "Syahputra",
];

$object = (object)$array; //konver menjadi object
var_dump($object);

echo $object->nama_depan . PHP_EOL;
echo $object->nama_belakang . PHP_EOL;

$arraylagi = (array)$array; //konver menjadi array
var_dump($arraylagi);
// echo $arraylagi->nama_belakang . PHP_EOL; //eror bukan object

$person = new Person("Andri", "Binjai");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);
