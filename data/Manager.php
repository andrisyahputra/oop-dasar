<?php

class Manager
{
    var string $nama;
    var string $title;

    public function __construct(string $nama = "Andri", string $title = "Manager")
    {
        $this->nama = $nama;
        $this->title = $title;
    }

    function sayHello(string $nama): void
    {
        echo "Hi $nama, nama saya ini manager $this->nama" . PHP_EOL;
    }
}

class VicePresident extends Manager
{

    public function __construct(string $nama = "")
    {
        // tidak wajib tapi rekomandasikan
        parent::__construct($nama, "VP");
    }

    function sayHello(string $nama): void
    {
        echo "Hi $nama, nama saya adalah VP $this->nama" . PHP_EOL;
    }
}
