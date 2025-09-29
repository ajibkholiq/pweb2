<?php

abstract class User
{
    protected $username;
    public $role;

    public function __construct($username)
    {
        $this->username = $username;
    }

    function editUsername($username)
    {
        $this->username = $username;
    }

    function getUsername()
    {
        return $this->username;
    }

    abstract function getRole();
}

class Mahasiswa extends User {

    function __construct($nama)
    {
        parent::__construct($nama);
        $this->role = "mahasiswa";
    }

    function setRole($role){
        $this->role = $role;
    }

    function getRole()
    {
        echo $this->role;
    }
}

$mahasiswa = new Mahasiswa("budi");


echo $mahasiswa->getRole();
echo "\n";

$mahasiswa->setRole("staf");

echo $mahasiswa->getRole();
echo "\n";
 
$mahasiswa->role = "admin";

echo $mahasiswa->getRole();



