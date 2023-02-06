<?php
namespace App;
class HKBank extends BankModel{
    public function tranfer($money)
    {
        echo "Bạn vừa chuyển thành công $money VNĐ <br/>";
    }
}