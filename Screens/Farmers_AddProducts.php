<?php
session_start();
require_once "./../Database/db.con.php";
require_once "./../includes/func.php";
$user_name = $_SESSION["userName"];
$result = getcrop_details($conn,$user_name);
?>

<html lang="en">
<head>
    <title>Farmer's dashboard</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/add_products.css"/>
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
            <div class="main_container">
                <div class="form_container">
                    <div class="title_container">
                            <h2> Add Crop </h2>
                            <hr>
                    </div>
                    <form action="./../includes/farmers_products_upload.php" method="post">
                        <div class="input_container">
                            <label>Crop Name</label>
                            <input type="text" name="name"/>
                        </div>
                        <div class="input_container">
                            <label>Crop Type</label>
                            <input type="text" name="croptype"/>
                        </div>
                        <div class="input_container">
                            <label>Crop Image</label>
                            <input type="file" name="cropimage"/>
                        </div>
                        <div class="input_container">
                            <label>Description</label>
                            <input type="text" name="description" id="">
                        </div>
                        <div class="input_container">
                            <label>Price (per-kg)</label>
                            <input type="text" name="price"/>
                        </div>
                        <div class="input_container">
                            <label>Available Quantity (kg)</label>
                            <input type="text" name="availablequantity"/>
                        </div>
                        <div class="button_container">
                            <button type="submit" name="upload">Upload</button>
                        </div>
                    </form>
                </div>
                <div class="table_container">
                         <div class="title_container">
                            <h2> Crop Details </h2>
                            <hr>
                        </div>
                        <div class="table_cls">
                                <table>
                                    <thead>    
                                        <th>Crop Name</th>
                                        <th>Crop Type</th>
                                        <th>Price(per-Kg)</th>
                                        <th>Available Quantity(Kg)</th>
                                        <th></th>                
                                        <th></th>
                                    </thead>
                                    <tbody> 
                                    <?php    
                                    if($result){                                        
                                        while($row = mysqli_fetch_assoc($result)){?>              
                                        <tr>
                                            <td><?php echo $row['CROP_NAME']; ?></td>
                                            <td><?php echo $row['CROP_TYPE']; ?></td>
                                            <td><?php echo $row['CROP_PRICE']; ?></td>
                                            <td><?php echo $row['CROP_QUANTITY']; ?></td>                                       
                                            <td><a href="CompostSupplier_Addfeedback_popup.php?nic=<?php echo $row['USER_NAME']; ?>"><img src="./../assets/icons/pencil_Icon.png"></a></td>
                                            <td><a href="CompostSupplier_Addfeedback_popup.php?nic="><img src="./../assets/icons/delete_Icon.png"></a></td>
                                        </tr>  
                                    <?php } } ?>                                   
                                    </tbody>
                                </table>
                            </div>
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