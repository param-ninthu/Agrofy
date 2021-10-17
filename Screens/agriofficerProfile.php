<html>
    <head>
        <title>Agri officer profile</title>
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
                            <td><img src="../assets/icons/userMgt_Icon.png" alt="shop icon"></td>
                            <td><a href="#" >User management</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/icons/viewFeedback_Icon.png" alt="view feedback icon"></td>
                            <td><a href="#" >View Feedback</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/icons/payvalidation.png" alt="add feedback icon"></td>
                            <td><a href="#" >Payment Validation</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/icons/advalidation.png" alt="add feedback icon"></td>
                            <td><a href="#" >Ads Validation</a></td>
                        </tr>
                        
                        <tr>
                            <td><img src="../assets/icons/profile_Icon.png" alt="profile icon"></td>
                            <td><a href="farmerProfile.php" >Profile</a></td>
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
                                <td><h1>Agriculture officer's Profile</h1></td>
                            </tr>
                        </table>                        
                    </header> 
                    <hr>
                  
                    
                    <!--display farmer's profile details in a table-->
                    <form action="">
                            <table class="profileTable">
                                <tr> 
                                    <td>Identity Card Number</td>
                                    <td>xxxxxxxxx V</td>
                                </tr>
                                <tr> 
                                    <td>Gender</td>
                                    <td>Male</td>
                                </tr>
                                <tr> 
                                    <td>Designation</td>
                                    <td>Field Officer</td>
                                </tr>
                                <tr> 
                                    <td>Email Address</td>
                                    <td>agriofficer@gmail.com</td>
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
                    <button type="button" class="editProfileButton" onclick="window.location.href='agriofficerEditProfile.php'">Edit Profile</button>
                
               
                </div>
            </div>
        </div> 
    </body>
</html>