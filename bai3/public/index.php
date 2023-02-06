<?php
// require __DIR__."/../app/bankModel.php";// DIR lấy thư mục 
// require __DIR__."/../app/HKBank.php";// DIR lấy thư mục 


// spl_autoload_register(function ($class){
//     $path=lcfirst (str_replace("\\","/",$class)); 
//     require_once __DIR__ ."/../".$path.".php";
//     var_dump($class);
// });


use APP\HKBank as Bank;
$bank =new Bank("Nguyễn Văn B");
$bank->tranfer(500); 