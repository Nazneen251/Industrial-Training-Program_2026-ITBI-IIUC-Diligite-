<?php
   
    function test_user($data){
             $data = trim($data);
             $data = stripcslashes($data);
             $data = htmlspecialchars($data);
             return $data;
    }

?>