<?php

require_once __DIR__ . '/Dokter.php';
require_once __DIR__ . '/Pasien.php';
require_once __DIR__ . '/Pemain.php';
require_once __DIR__ . '/Tim.php';
require_once __DIR__ . '/Buku.php';

$dokter = new Dokter('Dr. Andi');
$pasien = new Pasien('Budi');
$dokter->merawat($pasien);

$pemain1 = new Pemain('Eko');
$pemain2 = new Pemain('Dina');
$tim = new Tim('Garuda', [$pemain1, $pemain2]);
$tim->tampilkanPemain();

$buku = new Buku('Belajar Java');
$buku->tampilkanBab();
unset($buku);
