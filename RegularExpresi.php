<?php
$matches = [];
// $hasil = (bool)preg_match_all("/andri|coba|test/i", "Andri Syahputra FC", $matches);
$hasil = preg_match_all("/andri|syahputra|test/i", "Andri Syahputra FC", $matches);
var_dump($hasil);

// huruf besar kecil sama
$sensor = preg_replace("/anjing|bangsat/i", "*****", "Dasar lu anjing, bangsat");
var_dump($sensor);
// menjadi array
$split = preg_split("/[\s,-]/", "Andri Syahputra,Programmer,Back-End");
var_dump($split);
