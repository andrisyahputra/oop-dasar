<?php
function sayHello(string $awal, ?string $tengah = "", string $akhir): void
{
    echo "Hello $awal $tengah $akhir" . PHP_EOL;
}

sayHello("Andri", "MC", "Syahputra");

sayHello(akhir: "Syahputra", awal: "Andri", tengah: "MC");
sayHello(awal: "Andri", akhir: "Syahputra", tengah: NULL);
