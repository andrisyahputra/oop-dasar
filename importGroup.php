<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";
// use Data\One\Conflict;
// use Data\One\Dummy;
// use Data\One\Sample;

use Data\One\{Conflict as Conflict1, Dummy, Sample};
use Data\Two\{Conflict as Conflict2};
use function Helper\{HelpMe};

$conflict = new Conflict1;
$conflict2 = new Conflict2;
$dummy = new Dummy();
$sample = new Sample();

HelpMe();
