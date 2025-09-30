<?php

require_once "User.php";
require_once "notifikasi.php";

class Dosen extends User implements Notifikasi{

    function __construct($nama)
    {
        parent::__construct($nama);
    }

    function getRole(){
        return "Dosen";
    }
    function kirimNotifikasi($pesan)
    {
        echo $pesan;
    }

}
