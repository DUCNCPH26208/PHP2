<?php
class People{
    public $fullname ; 
    public $birthday;
    public $address;
    public function __construct($fullname,$birthday,$address)
    {
        $this->fullname=$fullname;
        $this->birthday=$birthday;
        $this->address=$address;
    }
    public function getInfo(){
        echo"Họ tên nhân viên : $this->fullname , ngày sinh nhân viên : $this->birthday , 
        địa chỉ nhân viên : $this->address<br/>";
    }
    

}

class Employee extends People { 
    public $id ;
    public $workingDays ;
    public $totalLeaveTaken ;
    public $dailyWage ;s
    public $luong;
    public function inFo($id,$workingDays,$dailyWage){
        $this->id=$id;
        $this->workingDays=$workingDays;
        $this->totalLeaveTaken=$totalLeaveTaken=30-$this->workingDays;
        $this->dailyWage=$dailyWage;
        echo"Id của nhân viên : $this->id, | Ngày làm việc : $this->workingDays | Số ngày nghỉ : $this->totalLeaveTaken | Lương theo ngày : $this->dailyWage";
    }
    public function getSalaryAmount(){
        $this->luong=$this->dailyWage*$this->workingDays;
        echo"Tiền Lương Của Tháng: $this->luong";

    } 
}
$staff1 = new Employee("Ngô Công Đức","26/08/2003","Thanh Hóa");
$staff1->getInfo();
$staff1->inFo(1,20,500000);
$staff1->getSalaryAmount();ttt