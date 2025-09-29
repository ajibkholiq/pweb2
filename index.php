<?php

require_once "Mahasiswa.php";
require_once "Dosen.php";

$mahasiswa = new Mahasiswa("budi wijaya");
$dosen = new Dosen("ujang");

echo $dosen->getUsername();
echo $dosen->getRole();

echo $mahasiswa->getUsername();
echo $mahasiswa->getRole();

