<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", ["name", "login", "password"], "id", false);
    }
    public function getName() {
        return $this->name;
    }

}