<?php

require_once __DIR__ . '/Bab.php';

class Buku
{
    private string $judulBuku;
    /** @var Bab[] */
    private array $daftarBab;

    public function __construct(string $judulBuku)
    {
        $this->judulBuku = $judulBuku;
        $this->daftarBab = [
            new Bab('Pendahuluan'),
            new Bab('Isi'),
            new Bab('Penutup'),
        ];
    }

    public function tampilkanBab(): void
    {
        echo "Buku {$this->judulBuku} memiliki bab:\n";
        foreach ($this->daftarBab as $bab) {
            echo '- ' . $bab->getJudulBab() . "\n";
        }
    }
}
