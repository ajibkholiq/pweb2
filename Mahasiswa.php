<?php 
require_once "User.php";

class Mahasiswa extends User{

    function __construct($nama)
    {
        parent::__construct($nama);
    }

    function getRole(){
        return "Mahasiswa";
    }

}



