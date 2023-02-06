<?php
namespace App\Models;

use PDO;
use PDOException;
class BaseModel{
    protected $conn;
    protected $sqlBuilder;

    public function __construct()
    {
        try{
            $this->conn=new PDO("mysql:host=localhost;
             dbname=we3014.01; charset=utf8","root","");
             $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function  all(){
        $model = new static;
        $model->sqlBuilder="Select * From ".$model->tableName;// hàm kết hợp với select sqlBuilder
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $result =$stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
}