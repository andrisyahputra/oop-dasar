<?php
class Zero
{
    private array $propeties = [];
    public function __get($nama)
    {
        return $this->propeties[$nama];
    }
    public function __set($nama, $value)
    {
        $this->propeties[$nama] = $value;
    }
    public function __iset($nama): bool
    {
        return isset($this->propeties[$nama]);
    }
    public function __unset($nama)
    {
        unset($this->propeties[$nama]);
    }

    public function __call($nama, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $nama with argument $join" . PHP_EOL;
    }
    public static function __callStatic($nama, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $nama with argument $join" . PHP_EOL;
    }
}

// bebas menentukan propertie
$zero = new Zero();
$zero->namaDepan = "Andri";
$zero->namaBelakang = "Syahputra";
$zero->nilai = 100;
echo "Nama Depan : $zero->namaDepan" . PHP_EOL;
echo "Nama Belakang : $zero->namaBelakang" . PHP_EOL;
echo "Nama Nilai : $zero->nilai" . PHP_EOL;

// bebas beri function
$zero->sayHello("Andrimc", "Syahputra");
$zero::sayHello("Andrimc", "Syahputra");
