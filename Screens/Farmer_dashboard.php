<html lang="en">
<head>
    <title>Farmer's dashboard</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/shop.css"/>
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
                    <a href="#">
                        <span class="icon"><i class="fa fa-shopping-bag" ></i></span>
                        <span class="title">Shop</span>
                    </a>
                </li>
                <li>
                    <a href="Farmers_AddProducts.php">
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
                <div class="toggle" onclick ="toggleMenu();">

                </div>
                <div class="search">
                    <div class="search_bar">
                       <label> <input type="text" placeholder="Search"> </lable>
                    </div> 
                    <div class="search_btn">
                        <button type="submit" name="search">Search</button>
                    </div>
                </div>
                <div class="shopping_cart">
                    <i class="fa fa-shopping-cart"></i>
                </div>
            </div>
            
            <div class="shopping_contents">
                <div class="product_contents">
                    <div class="product_image">
                        <img src="./../assets/icons/compost.png"/>
                    </div>
                    <div class="product_details">                    
                        <div class="product_title">
                            <h3> Ruhunu compost </h3>
                        </div>
                        <div class="product_description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore suscipit beatae incidunt voluptatibus hic nemo est provident, 
                        </div>
                        <div class="product_quantity">
                            <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            <p>1</p>
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>                            
                        </div>
                        <div class="product_btn">
                            <button type="submit" class="buy" name="buy">Buy Now</button>
                            <button type="submit" class="addcart" name="addcart">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="product_contents">
                    <div class="product_image">
                        <img src="./../assets/icons/compost.png"/>
                    </div>
                    <div class="product_details">                    
                        <div class="product_title">
                            <h3> Ruhunu compost </h3>
                        </div>
                        <div class="product_description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore suscipit beatae incidunt voluptatibus hic nemo est provident, 
                        </div>
                        <div class="product_quantity">
                            <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            <p>1</p>
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>                            
                        </div>
                        <div class="product_btn">
                            <button type="submit" class="buy" name="buy">Buy Now</button>
                            <button type="submit" class="addcart" name="addcart">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="product_contents">
                    <div class="product_image">
                        <img src="./../assets/icons/compost.png"/>
                    </div>
                    <div class="product_details">                    
                        <div class="product_title">
                            <h3> Ruhunu compost </h3>
                        </div>
                        <div class="product_description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore suscipit beatae incidunt voluptatibus hic nemo est provident, 
                        </div>
                        <div class="product_quantity">
                            <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            <p>1</p>
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>                            
                        </div>
                        <div class="product_btn">
                            <button type="submit" class="buy" name="buy">Buy Now</button>
                            <button type="submit" class="addcart" name="addcart">Add to Cart</button>
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