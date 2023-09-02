<?php

namespace Data;

abstract class Lokasi
{
    public string $nama;
}

class kota extends Lokasi
{
}

class Provinsi extends Lokasi
{
}

class Negara extends Lokasi
{
}
