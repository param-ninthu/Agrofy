<?php 

    session_start();
    
    if(isset($_POST['next'])){
        $selection =$_POST['user_roles'];
        foreach ($_POST AS $key => $value)
            {
                $_SESSION['info'][$key] = $value;
            }


            


        $keys = array_keys($_SESSION['info']);

        if(in_array('next',$keys)){
            unset($_SESSION['info']['next']);
        }
        if($selection == "Farmer"){
            header("Location: Registration_Farmer.php");
        }
        else if($selection== "Compost_supplier"){
            header("Location: Registration_Compost.php");
        }
        else if($selection=="Business"){
            header("Location: Registration_Business.php");
        }
        
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
            <p style="font-size:40px;font-weight:bold">User Details</p>
            <!-- <hr style="width:200px;height:3px;color:black"/> -->
        </div>
        <form action="" method="post">
             <div class="user-details">
                 <div class="input-box">
                     <span class="details"> First Name</span>
                     <input type="text" placeholder="First Name" name="fname" required />
                 </div>
                 <div class="input-box">
                     <span class="details"> Last Name</span>
                     <input type="text" placeholder="Last Name" name="lname" required />
                 </div>
                 <div class="gender-details">
                     <span class="gender-title"> Gender</span>
                     <div class="btn">
                         <div class="male">
                            <input type="radio" name="gender" value="male">
                            <span class="details"> Male</span> 
                         </div>
                        <div class="female">
                            <input type="radio" name="gender" value="female">
                            <span class="details"> Female</span> 
                        </div>
                     </div>  
                 </div>
                 <div class="input-box">
                     <span class="details"> Email</span>
                     <input type="text" placeholder="Email" name="email" required />
                 </div>
                 
                 <div class="input-box">
                     <span class="details"> User Role</span>
                     <select class="user_box" name="user_roles" id="users">
                        <option value="">Select your role</option>
                        <option value="Farmer">Farmer</option>
                        <option value="Compost_supplier">Compost Supplier</option>
                        <option value="Business">Business</option>
                     </select>
                 </div>
                 <div class="input-box">
                     <span class="details"> NIC</span>
                     <input type="text" placeholder="NIC" name="nic" required />
                 </div>
                 <div class="input-box">
                     <span class="details"> Mobile</span>
                     <input type="text" placeholder="Mobile" name="mobile" required />
                 </div>
                 <div class="input-box">
                     <span class="details"> Address</span>
                     <input type="text" placeholder="Address" name="address" required />
                 </div>
                 
                    <input class="submit_btn" type="submit" name="next" value="Next">
                 
             </div>
        </form>
    </div>
</body>
</html>