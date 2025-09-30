<?php
abstract class User {

    protected $username;
    protected $role; 

    function __construct($username)
    {
        $this->username = $username;
    }

    function getUsernama(){
        return $this->username;
    }

    abstract function getRole();

}