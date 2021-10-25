<?php 
    require_once './../includes/func.php';
    require_once './../Database/db.con.php';
    $result ='';
    if(isset($_POST['Farmer'])){
        $user='farmer';
        $result = getuser($conn,$user);
    }
    else if(isset($_POST['Business'])){
        $user='Business';
        $result = getuser($conn,$user);
    }
    else if(isset($_POST['Compost'])){
        $user='compost';
        $result = getuser($conn,$user);
    }
?>

<html lang="en">
<head>
    <title>Admins's dashboard</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/user_management.css"/>
    <!-- <link rel="stylesheet" href="./../assets/FontAwesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="" >
                        <span class="icon"><img src="./../assets/icons/logo.png"/></i></span>
                        <span class="title"><h2>Agrofy</h2></span>
                    </a>
                </li>
                <li active=true>
                    <a href="Admin_Dashboard.php" >
                        <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></i></span>
                        <span class="title">User Management</span>
                    </a>
                </li>
                <li>
                    <a href="Admin_Management.php">
                        <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <span class="title">Admin Management</span>
                    </a>
                </li>
                <li>
                    <a href="User_Verification.php">  
                        <span class="icon"><img src="./../assets/icons/user.png"/></span>
                        <span class="title">User Verification</span>
                    </a>
                </li>
                <li>
                    <a href="View_Feedback.php">  
                        <span class="icon"><i class="fa fa-comments" aria-hidden="true"></i></i></span>
                        <span class="title">View Feedback</span>
                    </a>
                </li>
                <li>
                    <a href="Add_Report.php">  
                        <span class="icon"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                        <span class="title">Add Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><img src="./../assets/icons/profile.jfif"/></i></span>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" ></i></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-sign-out" ></i></span>
                        <span class="title">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick ="toggleMenu();"></div>
            </div>
            <div class="title_main">
                <h1> User Managment </h1>
                <hr>
            </div>
            <div class="table_container">
                <div class="btn_cls">
                    <form action="Admin_Dashboard.php" method="post">
                        <button type="submit" name="Farmer"> Farmer</button>
                        <button type="submit" name="Compost">Compost Supplier</button>
                        <button type="submit" name="Business">Business Organisation</button>
                    </form>
                </div>
                
                <div class="table_cls">
                    <table>
                        <thead>
                            <th>Name</th>
                            <th>NIC</th>
                            <th>User-Role</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                        <?php 
                            if($result){                                        
                                while($row = mysqli_fetch_assoc($result)){?>   
                                <tr>
                                    <td><?php echo $row['FIRST_NAME']; ?></td>
                                    <td><?php echo $row['NIC']; ?></td>
                                    <td><?php echo $row['USER_ROLE']; ?></td>
                                    <td><?php echo $row['ADDRESS_']; ?></td>
                                    <td><?php echo $row['MOBILE']; ?></td>
                                    <td><a><img src="./../assets/icons/eye_Icon.png"></a></td>
                                    <td><a href="Farmer_editprofile.php"><img src="./../assets/icons/pencil_Icon.png"></a></td>
                                    <td><a href="./../includes/delete_user.php?nic=<?php echo $row['NIC'];?>&user-role=<?php echo $row['USER_ROLE']; ?>"><img src="./../assets/icons/delete_Icon.png"></a></td>
                                </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                    <form action="Registration_Step1.php" method="post">
                        <div class="add_btn">     
                                <button> 
                                    <span>Add User</span>
                                    <span><img src="./../assets/icons/add.png"></a></span>
                                </button>    
                        </div>
                    </form>
                </div>

            </div>
            
        </div>
    </div>

    <script>
        function toggleMenu(){
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }
    </script>

</body>
</html>