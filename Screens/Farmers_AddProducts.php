<html lang="en">
<head>
    <title>Farmer's dashboard</title>
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
                <li>
                    <a href="./Farmer_dashboard.php">
                        <span class="icon"><i class="fa fa-shopping-bag" ></i></span>
                        <span class="title">Shop</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-plus-circle" ></i></span>
                        <span class="title">Add Products</span>
                    </a>
                </li>
                <li>
                    <a href="Farmers_addfeedback.php">  
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
            <div class="form_container">
                <form action="" method="post">
                    <div class="title_main">
                        <h1> Add report </h1>
                        <hr>
                    </div>
                    <div class="input_container">
                        <p>Crop Name</p>
                        <input type="text" name="name"/>
                    </div>
                    <div class="input_container">
                        <p>Crop Type</p>
                        <input type="text" name="croptype"/>
                    </div>
                    <div class="input_container">
                        <p>Crop Image</p>
                        <input type="file" name="cropimage"/>
                    </div>
                    <div class="input_container">
                        <p>Description</p>
                        <textarea  name="description" rows="7" cols="80"></textarea>
                    </div>
                    <div class="input_container">
                        <p>Price</p>
                        <input type="text" name="price"/>
                    </div>
                    <div class="input_container">
                        <p>Available Quantity</p>
                        <input type="text" name="availablequantity"/>
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