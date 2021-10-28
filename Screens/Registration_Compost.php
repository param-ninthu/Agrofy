<?php 
    session_start();
    
    if(isset($_POST['next'])){
       
        foreach ($_POST AS $key => $value)
            {
                $_SESSION['info'][$key] = $value;
            }
        $keys = array_keys($_SESSION['info']);

        if(in_array('next',$keys)){
            unset($_SESSION['info']['next']);
        }

        header("Location: Registration_Step3.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/registration.css"/>
    <title>Document</title>
</head>
<body>
    <div class="sidenav">
            <img src="../assets/icons/logo.png"/>
    </div>
    <div class="container">
        <div class="title">
            <p style="font-size:40px;font-weight:bold">Compost Suppliers Details</p>
            <!-- <hr style="width:200px;height:3px;color:black"/> -->
        </div>
        <form action="" method="post">
             <div class="user-details">
                 <div class="input-box">
                     <span class="details"> Work Address</span>
                     <input type="text" placeholder="Work Address" name="workaddress" required />
                 </div>
                 <div class="input-box">
                     <span class="details"> Type of Compost</span>
                     <input type="text" placeholder="Type of Compost" name="typeofcompost" required />
                 </div>
                 
                 <div class="input-box">
                     <span class="details"> Business Name - if Registerd</span>
                     <input type="text" placeholder="Business Name - if Registerd" name="businessname" required />
                 </div>
                 
                 
                 <div class="input-box">
                     <span class="details"> No of Employees</span>
                     <input type="text" placeholder="No of Employees" name="numberofemp" required />
                 </div>

                 <div class="input-box">
                     <span class="details"> Upload Profile</span>
                     <input type="file" name="prof" />
                 </div>

                 <input class="submit_btn" type="submit" name="next" value="Next">                
             </div>
        </form>
    </div>
</body>
</html>