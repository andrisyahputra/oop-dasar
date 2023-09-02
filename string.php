<?php
require_once "data/Dosen.php";
$dosen = new Dosen();
$dosen->id = "1";
$dosen->nama = "Andrimc";
$dosen->setValue(100);

$string = (string) $dosen;
echo $string . PHP_EOL;

echo $dosen . PHP_EOL; //ini sama