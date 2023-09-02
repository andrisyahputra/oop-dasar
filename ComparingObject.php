<?php
require_once "data/Dosen.php";


$dosen = new Dosen();
$dosen->id = "1";
$dosen->nama = "Andrimc";
$dosen->setValue(100);

$dosen2 = new Dosen();
$dosen2->id = "1";
$dosen2->nama = "Andriziro";
$dosen2->setValue(100);

var_dump($dosen == $dosen2); //identik isinya
var_dump($dosen === $dosen2); //identik dgn variabe