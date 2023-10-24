<?php 

class dbh{
    
private $host='localhost',
$user='root',
$pwd='',
$dbName='oop';

protected function dbconnect(){
$dsn= 'mysql:host='.$this -> host.';dbname='.$this->dbName;
$pdo = new PDO($dsn,$this -> user,$this->pwd);
$pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
return $pdo;
    
}

}




?>