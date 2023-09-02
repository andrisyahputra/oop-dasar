<?php

namespace Data;

require_once "hewan.php";

interface HewanShelter
{
    function adopt(string $nama): hewan;
}

class KucingShelter implements hewanShelter
{
    public function adopt(string $nama): Kucing
    {
        $kucing = new Kucing();
        $kucing->nama = "Jerry";
        return $kucing;
    }
}

class TikusShelter implements hewanShelter
{
    public function adopt(string $nama): Tikus
    {
        $tikus = new Tikus();
        $tikus->nama = "Tom";
        return $tikus;
    }
}
