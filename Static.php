<?php
require_once "data/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$nama . PHP_EOL;

MathHelper::$nama = "Andrimc";
echo MathHelper::$nama . PHP_EOL;

$hasil = MathHelper::sum(10, 10, 10, 10);
echo "Hasilnya adalah : $hasil" . PHP_EOL;
