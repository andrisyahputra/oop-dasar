<?php
$datetime = new DateTime();
$datetime->setDate(1990, 1, 20);
$datetime->setTime(10, 10, 10, 10);

// bertambah
$datetime->add(new DateInterval("P1Y"));

// kurang
$kurangSatuBulan = new DateInterval("P1M");
$kurangSatuBulan->invert = true;
$datetime->add($kurangSatuBulan);

var_dump($datetime);

$now = new DateTime();
$now->setTimezone(new DateTimeZone('Asia/Tokyo'));
var_dump($now);
echo $now->format("Y-m-d H:i:s") . PHP_EOL;


$date = DateTime::createFromFormat("Y-m-d H:i:s", "2023-09-22 10:10:10", new DateTimeZone('America/Toronto'));
// $date = DateTime::createFromFormat("Y-m-d H:i:s", "salah", new DateTimeZone('America/Toronto'));
if ($date) {
    var_dump($date);
} else {
    echo "format salah" . PHP_EOL;
}
