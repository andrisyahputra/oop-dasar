<?php
class Dosen
{
    public string $id;
    public string $nama;
    private int $value;

    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    public function __clone()
    {
        unset($this->nama);
    }

    public function __toString(): string
    {
        return "Dosen id:$this->id, nama:$this->nama, value:$this->value";
    }
    public function __invoke(...$argument): void
    {
        $join = join(",", $argument);
        echo "Invoke dosen with argement $join" . PHP_EOL;
    }
    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "nama" => $this->nama,
            "value" => $this->value,
            "author" => "Andri",
            "version" => "1.0.0"
        ];
    }
}
