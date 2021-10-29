<html lang="en">
<head>
    <title>Farmer's dashboard</title>
    
    <link rel="stylesheet" type="text/css" href="shopping_cart.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="cart_container">
           <div class="header_container">
               <h3>Shopping Cart</h3>
               <h3>Items</h3> 
           </div>
           <div class="title_container">
               <div class="product_details_title">
                    <h3>Product Details</h3>
               </div>
               <div class="quantity_title">
                    <h3>Quantity</h3>
               </div>
               <div class="price_title">
                    <h3>Price</h3>
               </div>
               <div class="amount_title">
                    <h3>Amount</h3>
               </div>     
           </div>
           <div class="products_container">
              <div class="display_product_container">
                    <div class="product_details">
                            <div class="image_container">
                                <img src="./../../assets/img/groc.jpg">
                            </div>
                            <div class="about_product">
                                <label>White Brinjol 100kg</label>
                                <label>Brinjol</label>
                               <label><a href="">Remove</a></label>
                            </div>
                    </div>
                    <div class="quantity">
                        <div class="icon"> <i class="fa fa-minus-square" aria-hidden="true"></i> </div> 
                        <input type="text" name="quantity" value="1">
                        <div class="icon"><i class="fa fa-plus-square" aria-hidden="true"></i> </div>
                    </div>
                    <div class="price">
                        <label>Rs 10000</label>
                    </div>
                    <div class="amount">
                        <label>Rs 10000</label>
                    </div>
               </div>
               <div class="display_product_container">
                    <div class="product_details">
                            <div class="image_container">
                                <img src="./../../assets/img/groc.jpg">
                            </div>
                            <div class="about_product">
                                <label>White Brinjol 100kg</label>
                                <label>Brinjol</label>
                               <label><a href="">Remove</a></label>
                            </div>
                    </div>
                    <div class="quantity">
                        <div class="icon"> <i class="fa fa-minus-square" aria-hidden="true"></i> </div> 
                        <input type="text" name="quantity" value="1">
                        <div class="icon"><i class="fa fa-plus-square" aria-hidden="true"></i> </div>
                    </div>
                    <div class="price">
                        <label>Rs 10000</label>
                    </div>
                    <div class="amount">
                        <label>Rs 10000</label>
                    </div>
               </div>
               <div class="display_product_container">
                    <div class="product_details">
                            <div class="image_container">
                                <img src="./../../assets/img/groc.jpg">
                            </div>
                            <div class="about_product">
                                <label>White Brinjol 100kg</label>
                                <label>Brinjol</label>
                               <label><a href="">Remove</a></label>
                            </div>
                    </div>
                    <div class="quantity">
                        <div class="icon"> <i class="fa fa-minus-square" aria-hidden="true"></i> </div> 
                        <input type="text" name="quantity" value="1">
                        <div class="icon"><i class="fa fa-plus-square" aria-hidden="true"></i> </div>
                    </div>
                    <div class="price">
                        <label>Rs 10000</label>
                    </div>
                    <div class="amount">
                        <label>Rs 10000</label>
                    </div>
               </div>
           </div>
           <div class="footer_container">
               <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
               <label><a href="">Continue shopping</a></label> 
           </div>
        </div>
        <div class="checkout_container">
            <div class="checkout_image_container">
                <img src="./../../assets/img/payment.png">
            </div>
            <div class="header_container">
                <h3>Order Summary</h3>
            </div>
            <div class="title_container">
                <label> No of Items : 5 </label>
                <label> Rs 250000 </label>
            </div>
            <div class="button_container">
                <button type="submit"> Check Out </button>
            </div>
        </div>
    </div>
</body>
</html>