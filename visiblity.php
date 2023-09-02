<?php

use Data\One\Dummy;

require_once "data/Produk.php";

$produk = new Produk("Baju", 30000);

// $produk->nama = "Orange"; //eror
// $produk->harga = 50000; //eror

echo $produk->getNama() . PHP_EOL;
echo $produk->getHarga() . PHP_EOL;

$dummy = new ProdukDummy("Apel", 20000);
$dummy->info();
