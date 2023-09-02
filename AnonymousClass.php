<?php
interface HelloWorld
{
    function sayHello(): void;
}

// class SampleHelloWorld implements HelloWorld
// {
//     public function sayHello(): void
//     {
//         echo "Hello World" . PHP_EOL;
//     }
// }

// $helloWorld = new SampleHelloWorld();
// $helloWorld->sayHello();

$helloWorld = new class("Andrimc") implements HelloWorld
{
    public string $nama;
    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }

    public function sayHello(): void
    {
        echo "Hello $this->nama" . PHP_EOL;
    }
};

$helloWorld->sayHello();
