<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css"/>
    <title>Document</title>
</head>
<body>
    <div class="sidenav">
            <img src="../assets/icons/logo.png"/>
    </div>
    <div class="container">
        <div class="log_body">
            <div class="title">
                <p style="font-size:40px;font-weight:bold">Login</p>
                <!-- <hr style="width:200px;height:3px;color:black"/> -->
            </div>
            <form action="./../includes/login.inc.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details"> UserName</span>
                        <input type="text" placeholder="UserName" name="uname" required />
                    </div>
                    <div class="input-box">
                        <span class="details"> Password</span>
                        <input type="password" placeholder="Password" name="pass" required />
                    </div>
                    <div class="forgetpass">
                        <p><a href="#"> Forget Password?<a> </p>
                    </div>
                    <input class="submit_btn" type="submit" name="submit" value="Login">  
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>