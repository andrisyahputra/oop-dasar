<?php

namespace Data;

interface HasBrand
{
    function getBrand(): void;
}
interface isMaintenance
{
    function isMaintenance(): bool;
}
interface Mobil extends HasBrand, isMaintenance
{
    // secara defauld sudah abtract class jika semua abract lebih baik gunakan interface

    function drive(): void;

    function getTire(): int;
}
interface tahunMobil
{
    function getTahun(): int;
}

// class Avanza extends Manager implements Mobil{}; bisa
// class Avanza extends Manager implements Mobil, Kereta, Sepeda{}; bisa
class Avanza implements Mobil, tahunMobil
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }
    public function getTire(): int
    {
        return 4;
    }
    function getBrand(): void
    {
        echo "Toyota" . PHP_EOL;
    }

    function isMaintenance(): bool
    {
        return true;
    }

    function getTahun(): int
    {
        return 2023;
    }
}
