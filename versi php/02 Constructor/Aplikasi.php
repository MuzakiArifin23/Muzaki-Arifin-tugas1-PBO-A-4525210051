<?php

require_once __DIR__ . '/Mahasiswa.php';

$soja = new Mahasiswa();
$soja->tampilkanInfo();

$soja->setNama('Soja Purnamasari');
echo 'Nama : ' . $soja->getNama() . "\n";

$soja->setNim('4523210104');
echo 'NIM : ' . $soja->getNim() . "\n";

$soja->setUmur(15);
echo 'Umur : ' . $soja->getUmur() . "\n";

$nenden = new Mahasiswa('Nenden Nuraini', '4523210144', 17);
$nenden->tampilkanInfo();
