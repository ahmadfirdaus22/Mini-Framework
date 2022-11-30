<?php

namespace OOP\app\Model;
use OOP\app\Config\Database;

class Akun extends Database
{
    public function show(){
        $statement = self::$conn->prepare("SELECT * FROM data");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
}