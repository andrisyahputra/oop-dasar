<?php
    require_once "data/Hewan.php";
    use Data\{Hewan, Kucing, Tikus};

    $kucing = new Kucing();
    $kucing->nama = "Black";
    $kucing->run();
    
    $tikus = new Tikus();
    $tikus->nama = "Jerry";
    $tikus->run();
