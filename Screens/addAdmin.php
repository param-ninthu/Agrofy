<html>
    <head>
        <title>Add Admin </title>
        <link rel="stylesheet" href="../assets/css/frame1.css">
        <link rel="stylesheet" href="../assets/css/addAdmin.css">
        
    </head>

    <body>
        <div class="mainContainer">
            <div class="leftContainer">

                <!--agrofy logo-->
                <center><IMG src="../assets/img/agrofyLogo.png" style="margin-top: 70%;"></center>

            </div>



            <div class="rightContainer">
                <div class="content">
                    <h2>Admin Details </h2>
                    <hr>

                    <form action="" method="POST">
                        <table class="adminRegTable">
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
                                    <label for="jobRole">Job Role</label><br>
                                    <input type="text" id="jobRole" name="jobRole">
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
                                    <input type="text" id="mobile" name="mobile">
                                </td>

                                <td>
                                    <label for="address">Address</label><br>
                                    <input type="text" id="address" name="address">
                                </td>
                            </tr>

                            
                        </table>
                    </form>
                   

                    <!--next button-->
                    <div>
                        <button class="button2" onclick="window.location.href=''">Next</button>
                    </div>

                    
                </div>
            </div>
        </div>
    </body>
</html>