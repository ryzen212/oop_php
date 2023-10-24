<?php
class user_view extends query{
    public function showUsers($username,$pwd){
       $results = $this -> getusers($username,$pwd);
        echo json_encode($results);

    }

}
?>