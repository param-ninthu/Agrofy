<?php  
    require_once './../Database/db.con.php';
    require_once 'func.php'; 
    
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    userLogin($conn,$uname,$pass);
?>