<html>
    <head>
        <title>Compost supplier profile</title>
        <link rel="stylesheet" href="../assets/css/frame1.css">
        <link rel="stylesheet" href="../assets/css/leftMenu.css">
        <link rel="stylesheet" href="../assets/css/profile.css">
        
    </head>
    <body>
    <div class="mainContainer">
            <div class="leftContainer">
                <div class="menu">
                    <table cellspacing="20px">
                        <tr>
                            <td><img src="../assets/icons/addReports_Icon.png" alt="add product icon"></td>
                            <td><a href="#" >Add Product</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/icons/addReports_Icon.png" alt="add feedback icon"></td>
                            <td><a href="#" >Add Feedback</a></td>
                        </tr>
                        
                        <tr>
                            <td><img src="../assets/icons/profile_Icon.png" alt="profile icon"></td>
                            <td><a href="compostSupplierProfile.php" >Profile</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/icons/settings_Icon.png" alt="settings icon"></td>
                            <td><a href="#" >Settings</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/icons/logout_Icon.png" alt="logout icon"></td>
                            <td><a href="logout.php" >Logout</a></td>
                        </tr>

                    </table>
                </div>                
            </div>



            
            <div class="rightContainer">
                <div class="profileContent">
                    <header>
                        <table>
                            <tr>
                                <td><img src="../assets/img/profilePic.png" alt="profile pic" class="profileImg"></td>
                                <td><h1>Compost Producer's Profile</h1></td>
                            </tr>
                        </table>                        
                    </header> 
                    <hr>
                  
                    
                    <!--display compost supplier's profile details in a table-->
                    <form action="">
                            <table class="profileTable">
                                <tr> 
                                    <td>Identity Card Number</td>
                                    <td>xxxxxxxxx V</td>
                                </tr>
                                <tr> 
                                    <td>Email Address</td>
                                    <td>compostproducer@gmail.com</td>
                                </tr>
                                <tr> 
                                    <td>Phone number</td>
                                    <td>0123456789</td>
                                </tr>
                                <tr> 
                                    <td>Address</td>
                                    <td>xxxxxx</td>
                                </tr>                             
                            </table>
                    </form>
                 
                    <!--edit profile button-->
                    <button type="button" class="editProfileButton" onclick="window.location.href='compostEditProfile.php'">Edit Profile</button>
                
               
                </div>
            </div>
        </div> 
    </body>
</html>