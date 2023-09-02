<?php
require_once "data/SosialMedia.php";

$facebook = new FakeFacebook();
$facebook->nama = "Andri";
echo "Nama saya {$facebook->nama}";
