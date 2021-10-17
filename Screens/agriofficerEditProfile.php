<html>
    <head>
        <title>Agri officer-Edit profile </title>
        <link rel="stylesheet" href="../assets/css/frame1.css">
        <link rel="stylesheet" href="../assets/css/editProfile.css">
        
    </head>

    <body>
        <div class="mainContainer">
            <div class="leftContainer">
                <!--agrofy logo-->
               <center><IMG src="../assets/img/agrofyLogo.png" style="margin-top: 70%;"></center>
            </div>



            <div class="rightContainer">
                
                     <!-- upload image icon-->
                    <center><img src="../assets/img/uploadImage.png" alt="upload image"></center>  
                    
                    
                    <form action="" method="POST">
                        <table class="editTable">
                            <tr>
                                <td>
                                    <label for="Fname">First Name</label><br>
                                    <input type="text" id="Fname" name="Fname">
                                </td>

                                <td>
                                    <label for="Lname">Last Name</label><br>
                                    <input type="text" id="Lname" name="Lname">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="gender">Gender</label><br>
                                    <input type="radio" name="gender" value="male"> <label for="male"> Male</label>
                                    <input type="radio" name="gender" value="female"><label for="female"> Female</label>
                                
                                    
                                </td>

                                <td>
                                    <label for="job">Job Role</label><br>
                                    <input type="text" id="job" name="job">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="email">Email</label><br>
                                    <input type="text" id="email" name="email">
                                </td>
                                <td>
                                    <label for="NIC">NIC</label><br>
                                    <input type="text" id="NIC" name="NIC">
                                </td>
                            </tr>
                                

                            <tr>
                                <td>
                                    <label for="mobile">Mobile</label><br>
                                    <input type="text" id="mobile" name="moble">
                            </td>

                                <td>
                                    <label for="address">Address</label><br>
                                    <input type="text" id="address" name="address">
                                </td>
                            </tr>    

                           
                        </table>
                    </form>
                   

                    
                    <!--save changes button-->
                    <div>
                        <button class="button2" onclick="window.location.href='updateProfileConfirmation.php'">Save changes</button>
                    </div>            
             
            </div>
        </div>
    </body>
</html>