<html lang="en">
<head>
    <title>CompostSupplierDashboard</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/table.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/feedback.css"/>
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
                <li>
                    <a href="CompostSupplierDashboard.php">
                        <span class="icon"><i class="fa fa-plus-circle" ></i></span>
                        <span class="title">Add Products</span>
                    </a>
                </li>
                <li>
                    <a href="CompostSupplier_Addfeedback.php">  
                        <span class="icon"><i class="fa fa-sticky-note" ></i></span>
                        <span class="title">Add Feedbacks</span>
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
            <div class="feedback_container">
                <div class="compost_feed_title">
                    <h2>
                        Customer Details
                    </h2>
                    <hr>
                </div>
                <div class="table_container">
                        <div class="table_cls">
                                <table>
                                    <thead>    
                                        <th>Name</th>
                                        <th>Item Purshased</th>
                                        <th>Rating</th>
                                        <th>Suggestion</th>
                                        <th></th>                
                                    </thead>
                                    <tbody>               
                                        <tr>
                                            <td>Shivu</td>
                                            <td>Tomato</td>
                                            <td>XXXXXX</td>
                                            <td>XXXXXX</td>                                       
                                            <td><a href="#"><img src="./../assets/icons/pencil_Icon.png"></a></td>
                                        </tr>  
                                        <tr>
                                            <td>Ninthu</td>
                                            <td>Brinjol</td>
                                            <td>XXXXXX</td>
                                            <td>XXXXXX</td>
                                            <td><a href="#"><img src="./../assets/icons/pencil_Icon.png"></a></td>
                                        </tr>                               
                                    </tbody>
                                </table>
                            </div>
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