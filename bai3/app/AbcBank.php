<?php
namespace App;
class AbcBank extends BankModel{
    public function tranfer($money)
    {
        echo"$this->name đã chuyển 500000 thành công và phí dịch vụ 500 VNĐ";
    }
}