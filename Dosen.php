<?php
require_once "User.php";
require_once "Notifikasi.php";

class Dosen extends User implements Notifikasi{

    public function __construct($nama)
    {
        parent::__construct($nama);
    }

    public function getRole()
    {
        return "Dosen";
    }

    function kirimPesan($pesan)
    {
        echo $pesan;
    }
}