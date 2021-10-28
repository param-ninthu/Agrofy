<?php  
    session_start();
    require_once './../Database/db.con.php';
    require_once 'func.php'; 
    if(isset($_POST["upload"])){
        $uname = $_SESSION["userName"];
        $compost_name=$_POST["name"];
        $compost_type=$_POST["composttype"];
        $compost_description=$_POST["description"];
        $compost_image=$_POST["compostimage"];
        $compost_price=$_POST["price"];
        $compost_quantity=$_POST["availablequantity"];
        add_compost($conn,$uname,$compost_name,$compost_type,$compost_description,$compost_image,$compost_price,$compost_quantity);
    }    
?>