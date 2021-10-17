<html>
    <head>
        <title>Admin profile</title>
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
                            <td><img src="../assets/icons/userMgt_Icon.png" alt="user mgt icon"></td>
                            <td><a href="#" >User management</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/icons/adminMgt_Icon.png" alt="admin mgt icon"></td>
                            <td><a href="adminManagement.php" >Admin management</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/icons/viewFeedback_Icon.png" alt="view feedback icon"></td>
                            <td><a href="adminViewFeedback.php" >View feedback</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/icons/addReports_Icon.png" alt="add reports icon"></td>
                            <td><a href="adminUploadReports.php" >Add reports</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/icons/profile_Icon.png" alt="profile icon"></td>
                            <td><a href="adminProfile.php" >Profile</a></td>
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
                                <td><h1>Admin profile</h1></td>
                            </tr>
                        </table>                        
                    </header> 
                    <hr>
                  
                    
                    <!--display admin's profile details in a table-->
                    <form action="">
                            <table class="profileTable">
                                <tr> 
                                    <td>Identity card number</td>
                                    <td>xxxxxxxxx V</td>
                                </tr>
                                <tr> 
                                    <td>Email address</td>
                                    <td>admin@gmail.com</td>
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
                    <button type="button" class="editProfileButton" onclick="window.location.href='Agrofy/Screens/editProfile.php'">Edit profile</button>
                
               
                </div>
            </div>
        </div>
    </body>
</html>