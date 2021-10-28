<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/admin_reg.css"/>
    <title>Add Admin</title>
</head>
<body>
    <div class="container">
        <div class="sidenav">
                <img src="../assets/icons/logo.png"/>
        </div>
        <div class="main_container">
                
               <div class="form_container">
                    <div class="title_container">
                        <h2>Add Moderator</h2>
                        <hr>
                    </div>
                   <form action="../includes/mod_reg.php" method="post">
                        <div class="input_container_right">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder=" Enter your First Name">
                        </div>
                        <div class="input_container_left">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder=" Enter your Last Name">
                        </div>
                        <div class="input_container_right">
                            <label>Gender</label>
                            <div class="gender">
                                <div class="male_cls">
                                    <label>Male</label>
                                    <input type="radio" name="gender" value="male">
                                </div>  
                                <div class="female_cls">
                                    <label>Female</label>
                                    <input type="radio" name="gender" value="female">
                                </div>
                            </div>
                        </div>
                        <div class="input_container_left">
                            <label>Job Role</label>
                            <select class="user_box" name="job_roles" id="users">
                                <option value=""><b>Select your Job role</b></option>
                                <option value="Technical Assistant"><b>Technical Assistant</b></option>
                                <option value="Agricultural Officer"><b>Agricultural Officer</b></option>
                            </select> 
                        </div>
                        <div class="input_container_right">
                            <label>Email</label>
                            <input type="text" name="email" placeholder=" Enter your Email">
                        </div>
                        <div class="input_container_left">
                            <label>NIC</label>
                            <input type="text" name="nic" placeholder=" Enter your NIC">
                        </div>
                        <div class="input_container_right">
                            <label>Mobile</label>
                            <input type="text" name="mobile" placeholder=" Enter your Mobile number">
                        </div>
                        <div class="input_container_left">
                            <label>Address</label>
                            <input type="text" name="address" placeholder=" Enter your Address">
                        </div>
    
                        <div class="input_container_right">
                            <label>Username</label>
                            <input type="text" name="uname" placeholder=" Enter your Username">
                        </div>
                        <div class="input_container_left">
                            <label>Password</label>
                            <input type="password" name="pass" placeholder=" Enter your Password">
                        </div>
                        <div class="input_container_right">
                            <label>Confirm Password</label>
                            <input type="password" name="cpass" placeholder=" Re Enter your Password">
                        </div>
                        <div class="button_container">
                            <!-- <input type="submit" value="Next" name="submit"> -->
                            <button type="submit" name="submit">Submit</button>
                        </div>
                   </form>
               </div>
        </div>
    </div>
</body>
</html>