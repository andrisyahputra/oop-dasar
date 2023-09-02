<?php

namespace Data\Traits;

trait HasNama
{
    public string $nama;
}

trait SayGoodBye
{

    function goodBye(?string $nama): void
    {
        if (is_null($nama)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good Bye $nama" . PHP_EOL;
        }
    }
}
trait SayHello
{

    function hello(?string $nama): void
    {
        if (is_null($nama)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $nama" . PHP_EOL;
        }
    }
}

trait CanOlahraga
{
    // wajib abstract
    public abstract function run(): void;
}
class ParentPerson
{
    function goodBye(?string $nama): void
    {
        if (is_null($nama)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Person Good Bye $nama" . PHP_EOL;
        }
    }

    function hello(?string $nama): void
    {
        if (is_null($nama)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Person Hello $nama" . PHP_EOL;
        }
    }
}

trait All
{
    use SayGoodBye, SayHello, HasNama, CanOlahraga {
        // goodBye as private;
        goodBye as public;
        hello as public;
    }
}

class Person extends ParentPerson
{
    use All;

    public function run(): void
    {
        echo "Person {$this->nama} lagi olahraga" . PHP_EOL;
    }
}
