<?php
require_once "data/Dosen.php";
$dosen = new Dosen();
$dosen->id = "1";
$dosen->nama = "Andrimc";
$dosen->setValue(100);

var_dump($dosen);
