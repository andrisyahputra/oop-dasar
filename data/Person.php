<?php
class Person
{

    const AUTHOR = "PZN";

    var ?string $nama = null;
    var ?int $umur = null;
    var string $alamat = "Indonesia";

    function __construct(string $nama, ?string $alamat)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    function sayHello(string $nama)
    {
        echo "Hai $nama" . PHP_EOL;
    }

    // boleh null
    function haiNama(?string $nama)
    {
        if (is_null($nama)) {
            echo "Hi, nama saya is $this->nama" . PHP_EOL;
        } else {
            echo "Hi $nama, nama saya adalah $this->nama" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author nya : " . Person::AUTHOR . PHP_EOL;
    }

    // function __destruct()
    // {
    //     echo "Object Person $this->nama di hapus" . PHP_EOL;
    // }
}