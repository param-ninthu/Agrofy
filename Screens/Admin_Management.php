<?php 
require_once "./../includes/func.php";
require_once "./../Database/db.con.php";

$result =getmoderator($conn);

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
                    <a href="Logout.php">
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
                <h1> Admin Managment </h1>
                <hr>
            </div>
            <div class="table_container">              
                <div class="table_cls">
                    <table>
                        <thead>
                            <th>Name</th>
                            <th>NIC</th>
                            <th>Job-Role</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php if($result){
                                  while($row = mysqli_fetch_assoc($result)){ ?>
                            <tr>
                                <td><?php echo $row['FIRST_NAME'] ?></td>
                                <td><?php echo $row['NIC'] ?></td>
                                <td><?php echo $row['JOB_ROLE'] ?></td>
                                <td><?php echo $row['MOBILE'] ?></td>
                                <td><?php echo $row['ADDRESS_'] ?></td>
                                <td><a><img src="./../assets/icons/eye_Icon.png"></a></td>
                                <td><a><img src="./../assets/icons/pencil_Icon.png"></a></td>
                                <td><a><img src="./../assets/icons/delete_Icon.png"></a></td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                    <div class="add_btn">
                        <button > 
                            <span>Add Admin</span>
                            <span><a href="./Add_AgriculturalOfficer.php"><img src="./../assets/icons/add.png"></a></span>
                        </button>
                    </div>
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