<?php
class Kategori
{
    private string $nama;
    private bool $expresi;

    public function getNama(): string
    {
        return $this->nama;
    }

    public function setNama(string $nama): void
    {
        if (trim($nama) != "") {
            $this->nama = $nama;
        }
        // $this->nama = $nama;

        // return $this;
    }

    public function isExpresi(): bool
    {
        return $this->expresi;
    }

    public function setExpresi(bool $expresi): self
    {
        $this->expresi = $expresi;

        return $this;
    }
}
