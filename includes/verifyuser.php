<?php 
   

    
    require_once './../Database/db.con.php';
    require_once 'func.php'; 
    
    if(isset($_POST['farmer'])){
        echo 'Hi';
    }
    else if(isset($_POST['Business'])){
        echo 'Hi businessman';
    }
    else if(isset($_POST['compost'])){
        echo 'Hi compost';
    }

    
?>