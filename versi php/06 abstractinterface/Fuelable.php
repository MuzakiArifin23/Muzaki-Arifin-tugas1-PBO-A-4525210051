<?php

interface Fuelable
{
    public function refuel(): void;
}

trait FuelableDefault
{
    public function refuel(): void
    {
        echo "Mengisi bahan bakar umum.\n";
    }
}
