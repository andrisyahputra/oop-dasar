<?php

require_once "Makanan.php";
require_once "Hewan.php";
require_once "HewanShelter.php";

use Data\{KucingShelter, Makanan, MakananHewan, TikusShelter};

$kucingShelter = new KucingShelter();
$kucing = $kucingShelter->adopt("wan");
$kucing->eat(new MakananHewan);

$tikusShelter = new TikusShelter();
$tikus = $tikusShelter->adopt("wan");
$tikus->eat(new Makanan);
