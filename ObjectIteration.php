<?php
class Data implements IteratorAggregate
{
    var string $pertama = "Pertama";
    public string $kedua = "Kedua";
    private string $ketiga = "ketiga";
    protected string $keempat = "keempat";

    // public function getIterator()
    // {
    // $array = [
    // "Pertama" => $this->pertama,
    // "Kedua" => $this->kedua,
    // "ketiga" => $this->ketiga,
    // "keempat" => $this->keempat
    // ];

    // return new ArrayIterator($array);
    // }

    public function getIterator()
    {
        $array = [
            yield "Pertama" => $this->pertama,
            yield "Kedua" => $this->kedua,
            yield "ketiga" => $this->ketiga,
            yield "keempat" => $this->keempat
        ];
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
