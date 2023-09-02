<?php
require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello, HasNama, CanOlahraga};

$person = new Person();
$person->goodBye("Andri");
$person->hello("Andri");
$person->nama = "Andrimc";
var_dump($person);

$person->run();
