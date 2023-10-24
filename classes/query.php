<?php 
class query extends Dbh{

    protected function getusers($username,$pwd){
        $sql = 'Select * from users where username=? and password=?';
        $stmt = $this ->dbconnect()->prepare($sql);
        $stmt-> execute([$username,$pwd]);
       
     $results = $stmt->fetchAll();
        return $results;

    }

public function setusers($username,$pwd){
    $sql = 'INSERT into users(username,password) values (?,?)';
    $stmt = $this ->dbconnect()->prepare($sql);
    $stmt-> execute([$username,$pwd]);


}
}
?>