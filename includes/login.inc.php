<?php  
    require_once './../Database/db.con.php';
    require_once 'func.php'; 
    if(isset($_POST["submit"])){
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];
        $find_user =$uname[0].$uname[1].$uname[2];

        if($find_user === "mod"){
            moderatorlogin($conn,$uname,$pass);
        }
        else if($find_user === "adm"){
            adminlogin($conn,$uname,$pass);
        }
        else{
            userLogin($conn,$uname,$pass);
        }
        
        
        
    }    
?>