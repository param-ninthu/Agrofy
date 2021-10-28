<?php  
    session_start();
    require_once './../Database/db.con.php';
    require_once 'func.php'; 
    if(isset($_POST["upload"])){
        $uname = $_SESSION["userName"];
        $crop_name=$_POST["name"];
        $crop_type=$_POST["croptype"];
        $crop_description=$_POST["description"];
        $crop_image=$_POST["cropimage"];
        $crop_price=$_POST["price"];
        $crop_quantity=$_POST["availablequantity"];
        add_crop($conn,$uname,$crop_name,$crop_type,$crop_description,$crop_image,$crop_price,$crop_quantity);
    }    
?>