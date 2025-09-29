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

