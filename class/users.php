<?php

class users{
    function fetchUser($id): bool{
        //$db=new Database();
       // $db->selectQuery($id,$tableName);
       $result=false;
       echo "query";
       $result=true;
       return $result;
    }
    function deleteUser($id){
        echo "Deleting the result of ID : $id";
    }
}

$user1=new users();
$user1->fetchUser(101);
$user1->fetchUser(102);
$user1->deleteUser(101);

?>