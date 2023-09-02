<?php
require_once "data/Shape.php";

use Data\{Shape, Rectagle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$reactagle = new Rectagle();
echo $reactagle->getCorner() . PHP_EOL;
echo $reactagle->getCornerParent() . PHP_EOL;
