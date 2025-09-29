<?php
require_once "User.php";

class Mahasiswa extends User implements Notifikasi
{
    public function __construct($nama)
    {
        parent::__construct($nama);
        $this->role = "Mahasiswa";
    }

    function getRole()
    {
        return $this->role;
    }
    function kirimPesan($pesan)
    {
      
    }
}
