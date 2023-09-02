<?php
require_once "data/Programmer.php";
require_once "data/Manager.php";

$company = new Company();
$company->programmer = new Programmer("Andrimc");
var_dump($company);

$company->programmer = new BackendProgrammer("Andrimc");
var_dump($company);

$company->programmer = new FrontendProgrammer("Andrimc");
var_dump($company);

sayHello(new Programmer("Andri"));
sayHello(new BackendProgrammer("Andri"));
sayHello(new FrontendProgrammer("Andri"));
