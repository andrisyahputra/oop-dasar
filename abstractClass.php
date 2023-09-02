<?php
require_once "data/Lokasi.php";

use Data\{Lokasi, kota, Provinsi, Negara};

// karena class abstract
// $lokasi = new Lokasi();ini eror kalau bukan turunan tidak eror

$kota = new kota();
$provinsi = new Provinsi();
$negara = new Negara();
