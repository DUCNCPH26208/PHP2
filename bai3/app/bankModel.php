<?php
namespace App;
abstract class BankModel{
    protected $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    abstract public function tranfer($money);
}