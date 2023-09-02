<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

// tanpa alias eror
// use Data\One\Conflict;
// use Data\Two\Conflict;

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Confilct2;
use function Helper\HelpMe as help;
use const Helper\APPLICATION as APP;

$conflik = new Conflict1();
$conflik2 = new \Data\Two\Conflict();
$conflik3 = new Confilct2();

help();

echo APP . PHP_EOL;
