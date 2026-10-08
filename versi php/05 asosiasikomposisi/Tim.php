<?php

require_once __DIR__ . '/Pemain.php';

class Tim
{
    private string $namaTim;
    /** @var Pemain[] */
    private array $daftarPemain;

    public function __construct(string $namaTim, array $daftarPemain)
    {
        $this->namaTim = $namaTim;
        $this->daftarPemain = $daftarPemain;
    }

    public function tampilkanPemain(): void
    {
        echo "Tim {$this->namaTim} memiliki pemain:\n";
        foreach ($this->daftarPemain as $pemain) {
            echo '- ' . $pemain->getNama() . "\n";
        }
    }
}
