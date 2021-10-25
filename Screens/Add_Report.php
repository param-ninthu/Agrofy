<html lang="en">
<head>
    <title>Admins's dashboard</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/addReport.css"/>
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
                <h1> Add report </h1>
                <hr>
            </div>

            <div class="form_container">
                <form action="" method="post">
                    <div class="input_container">
                        <p>Name</p>
                        <input type="text" name="name"/>
                    </div>
                    <div class="input_container">
                        <p>Date</p>
                        <input type="text" name="name"/>
                    </div>
                    <div class="input_container">
                        <p>Description</p>
                        <textarea  name="description" rows="7" cols="80"></textarea>
                    </div>
                    <div class="input_container">
                        <p>Upload File</p>
                        <input type="file" name="prof"/>
                    </div>
                    <div class="btn_container">
                        <button type="submit">Upload</button>
                    </div>
                </form>
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