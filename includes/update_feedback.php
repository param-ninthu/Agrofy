<?php 

    require_once './../Database/db.con.php';
    require_once 'func.php'; 

    if(isset($_POST['submit'])){
        $rating =$_POST['rate'];
        $feedback=$_POST['feedback'];
        $user_name=$_POST['uname'];
    update_feedback($conn,$rating,$feedback,$user_name);
    }
   

?>