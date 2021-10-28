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
                <h1> Feedback </h1>
                <hr>
            </div>
            <div class="table_container">
                <div class="btn_cls">
                    <button type="submit" name="Farmer"> <a href="#">Farmer</a></button>
                    <button type="submit" name="Compost"><a href="#">Compost Supplier</a></button>
                    <button type="submit" name="Business Organization"><a href="#">Business Organisation</a></button>
                </div>
                
                <div class="table_cls">
                    <table>
                        <thead>
                            <th>Name</th>
                            <th>Feedback</th>
                            <th>User-Role</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ninthu</td>
                                <td>The feedback is about....</td>
                                <td>Farmer</td>
                                <td><a><img src="./../assets/icons/eye_Icon.png"></a></td>
                                <td><a><img src="./../assets/icons/delete_Icon.png"></a></td>
                            </tr>
                            <tr>
                                <td>Ninthu</td>    
                                <td>The feedback is about....</td>
                                <td>Farmer</td>
                                <td><a><img src="./../assets/icons/eye_Icon.png"></a></td>
                                <td><a><img src="./../assets/icons/delete_Icon.png"></a></td>
                            </tr>
                            <tr>
                                <td>Ninthu</td>                               
                                <td>The feedback is about....</td>
                                <td>Farmer</td>
                                <td><a><img src="./../assets/icons/eye_Icon.png"></a></td>
                                <td><a><img src="./../assets/icons/delete_Icon.png"></a></td>
                            </tr>
                        </tbody>
                    </table>
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