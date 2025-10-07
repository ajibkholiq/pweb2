<?php 

require_once "Dosen.php";
require_once "mahasiswa.php";

$mahasiswa1 = new Mahasiswa("dadang");
$dosen = new Dosen("ahmad");

echo $mahasiswa1->getRole();
echo $dosen->getRole();

function infoUser(User $user){
    echo "\nnama :".$user->getUsernama()."\nperan : ".$user->getRole();
}

infoUser($mahasiswa1);
infoUser($dosen);


