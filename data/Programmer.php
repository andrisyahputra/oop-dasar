<?php
class Programmer
{
    public string $nama;

    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }
}

class BackendProgrammer extends Programmer
{
}
class FrontendProgrammer extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}

function sayHello(Programmer $programmer)
{
    // echo "$programmer->nama" . PHP_EOL;
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->nama" . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->nama" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->nama" . PHP_EOL;
    }
}
