<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->nama = "Andrimc";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->nama = "Coba";
$vp->sayHello("Cobaan");
