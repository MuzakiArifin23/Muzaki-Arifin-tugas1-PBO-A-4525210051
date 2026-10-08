<?php

require_once __DIR__ . '/BangunDatar.php';

class Lingkaran extends BangunDatar
{
    private int $r;

    public function __construct(int $r)
    {
        $this->r = $r;
    }

    public function luas(): float
    {
        return pi() * $this->r * $this->r;
    }

    public function keliling(): float
    {
        return 2 * pi() * $this->r;
    }
}
