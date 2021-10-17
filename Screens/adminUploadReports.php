<html>
    <head>
        <title>Admin upload reports</title>
        <link rel="stylesheet" href="../assets/css/frame1.css">
        <link rel="stylesheet" href="../assets/css/leftMenu.css">
        <link rel="stylesheet" href="../assets/css/adminUploadReports.css">
        
    </head>

    <body>
        <div class="mainContainer">
            <div class="leftContainer">
            
                <div class="menu">

                    <table cellspacing="20px">
                            <tr>
                                <td><img src="../assets/icons/userMgt_Icon.png" alt="user mgt icon"></td>
                                <td><a href="#" > User management</a></td>
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
            
                <div class="greyBox1">

                    <div class="content">

                        <h2>Upload Reports</h2> 
                        <form action="" method="POST">
                            <table class="uploadRepTable">
                                <tr>
                                    <td><button class="button2">Name</button></td>
                                    <td><input type="text" id="name" name="name" size="50"></td>
                                </tr>

                                <tr>
                                    <td><button class="button2">Date</button></td>
                                    <td><input type="text" id="date" name="date"></td>
                                </tr>

                                <tr>
                                    <td><button class="button2">Description</button></td>
                                    <td><textarea id="description" name="description" cols="50" rows="5"></textarea></td>
                                </tr>

                                <tr>
                                    <td><button class="button2">Upload file</button></td>

                                    <!--set a button to upload a report from the user's computer-->
                                    <td>
                                        Click on the "Choose File" button to upload <br><br>
                                            <input type="file" id="myFile" name="filename">                                                                                      
                                   </td>
                                </tr>
                            </table>

                            <!--submit button-->
                             <input type="submit" value="Upload" class="submitButton2">                         
                        </form>

                    </div>

                </div>
                    
            </div>

    </div>

                
    </body>
</html>