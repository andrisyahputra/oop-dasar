<?php
require_once "data/Person.php";

$person = new Person("Andri Syahputra", "Binjai");
$person->umur = 23;
$person->alamat = "binjai";
var_dump($person);

echo "Nama saya $person->nama umur saya: $person->umur, alamat saya $person->alamat";

$person2 = new Person("Andri Syahputra", null);
// $person2->nama = "Bagus Setiawan"; //eror kalau tidak diberikan null
$person2->umur = null;
// $person2->alamat = "Km 18";
var_dump($person2);

echo "Nama saya $person2->nama umur saya: $person2->umur, alamat saya $person2->alamat";
