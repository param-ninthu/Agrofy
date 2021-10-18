<?php 

    session_start();
    
    if(isset($_POST['submit'])){
        
        foreach ($_POST AS $key => $value)
            {
                $_SESSION['info'][$key] = $value;
            }
        $keys = array_keys($_SESSION['info']);

        if(in_array('submit',$keys)){
            unset($_SESSION['info']['submit']);
        }

        header("Location: ./../includes/reg_.php");
        
    }

?>
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
            <p style="font-size:40px;font-weight:bold">User Credentials</p>
            <!-- <hr style="width:200px;height:3px;color:black"/> -->
        </div>
        <form action="" method="post">
             <div class="user-details">
                 <div class="input-box">
                     <span class="details"> UserName(NIC)</span>
                     <input type="text" placeholder="UserName" name="uname" required />
                 </div>
                 <div class="input-box">
                     <span class="details"> Password</span>
                     <input type="password" placeholder="Password" name="pass" required />
                 </div>
                 
                 <div class="input-box">
                     <span class="details"> Confirm Password</span>
                     <input type="password" placeholder="Confirm Password" name="cpass" required />
                 </div>
                 
                 <input class="submit_btn" type="submit" name="submit" value="Submit">                
             </div>
        </form>
        <?php
    if(isset($_GET["error"])) {
      
      if($_GET["error"] == "pwddontmatch"){
        echo "<p>Passwords Don't Match!</p>";
      }
      else if($_GET["error"] == "none"){
        echo "<p>You have signed up!</p>";
      }
     
      }
    
  ?>

    </div>
</body>
</html>

