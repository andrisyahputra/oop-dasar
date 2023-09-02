<?php
class Produk
{
    private string $nama;
    private int $harga;

    protected string $nama_dummy;


    public function __construct(string $nama, int $harga)
    {
        $this->nama = $nama;
        $this->nama_dummy = $nama;
        $this->harga = $harga;
    }

    /**
     * Get the value of harga
     *
     * @return int
     */
    public function getHarga(): int
    {
        return $this->harga;
    }

    /**
     * Set the value of harga
     *
     * @param int $harga
     *
     * @return self
     */
    public function setHarga(int $harga): self
    {
        $this->harga = $harga;

        return $this;
    }

    /**
     * Get the value of nama
     *
     * @return string
     */
    public function getNama(): string
    {
        return $this->nama;
    }

    /**
     * Set the value of nama
     *
     * @param string $nama
     *
     * @return self
     */
    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }
}

class ProdukDummy extends Produk
{
    function info()
    {
        // echo "nama $this->nama" . PHP_EOL; nama di extends private
        echo "nama produk $this->nama_dummy" . PHP_EOL;
    }
}
