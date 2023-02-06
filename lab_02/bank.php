<?php
class Info
{
    public $stk;
    public $name;
    public $money;


    public function __construct($stk, $name, $money)
    {
        $this->stk = $stk;
        $this->name = $name;
        $this->money = $money;
    }
    public function GetInfo()
    {
        echo "Số tài khoản : $this->stk | Tên tài khoản : $this->name | Số Dư tài khoản : $this->money";
    }
    public $Card;
    public function toTal($Card)
    {
        if ($Card < 0) {
            $this->Card = 0;
        } else {
            $this->Card = $Card;
        }
        $this->money = $this->money + $this->Card;
        echo "số dư hiện tại : $this->money";
    }
    public $num;
    public function sdKhiRut($num)
    {
        if ($num < 0) {
            $this->num = 0;
        } else {
            $this->num = $num;
        }
        $this->money = $this->money - $this->num;
        echo "số dư hiện tại : $this->money";
    }
}
$customer = new Info("23456789", "Bank", "2000");
// $customer->toTal(500);
$customer->sdKhiRut(400);
