<?php 
if(isset($_POST['logout'])){

} 
?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/logout.css"/>
    <title>Logout</title>
</head>
<body>
    <div class="container">
        <div class="sidenav">
                <img src="../assets/icons/logo.png"/>
        </div>
        <div class="main_container">
               <div class="logout_container">
                    <div class="logo_container">
                        <img src="../assets/icons/logo.png"/>
                    </div>
                    <form action="./../includes/logout.inc.php" method="post">
                        <div class="button_container">
                            <button type="submit" name="logout">LogOut</button>
                        </div>
                    </form>
               </div>     
        </div>
    </div>
</body>
</html>