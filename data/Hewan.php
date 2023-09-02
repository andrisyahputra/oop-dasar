<?php

namespace Data;

require_once "Makanan.php";

abstract class Hewan
{
    public string $nama;

    abstract public function run(): void;

    abstract public function eat(MakananHewan $makananHewan): void;
}

class Kucing extends Hewan
{
    public function run(): void
    {
        echo "Kucing $this->nama bisa lari" . PHP_EOL;
    }

    public function eat(MakananHewan $makananHewan): void
    {
        echo "kucing sedang makan" . PHP_EOL;
    }
}
class Singa extends Hewan
{
    public function run(): void
    {
        echo "Kucing $this->nama bisa lari" . PHP_EOL;
    }

    public function eat(MakananHewan $makananHewan): void
    {
        echo "Singa sedang makan" . PHP_EOL;
    }
}
class Tikus extends Hewan
{
    public function run(): void
    {
        echo "Tikus $this->nama bisa lari" . PHP_EOL;
    }

    public function eat(Makanan $makananHewan): void
    {
        echo "Tikus sedang makan" . PHP_EOL;
    }
}
