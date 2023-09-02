<?php
require_once "data/Kategori.php";

$kategori = new Kategori();
// $kategori->nama = "Andri"; //eror
$kategori->setNama("Buku");
$kategori->setExpresi(true);

$kategori->setNama("Tas");
echo "Nama : {$kategori->getNama()}" . PHP_EOL;
echo "Expresi : {$kategori->isExpresi()}" . PHP_EOL;
