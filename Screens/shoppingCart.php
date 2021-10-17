<html>
    <head>
        <title>Shopping cart</title>
        <link rel="stylesheet" href="../assets/css/shoppingCart.css">
    </head>



    <body>
        <div class="grid">
            <div class="leftColumn">
                <h2>Shopping cart</h2>

                <!--shopping cart table-->
                <table class="shopTable">
                        <tr>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>                           
                        </tr>

                        <tr>
                            <td>Item 1</td>
                            <td>Rs 450</td>
                            <td><img src="../assets/icons/quantity_minus.png" alt="minus icon">1<img src="../assets/icons/quantity_add.png" alt="add icon"></td>
                            <td>Rs 450</td>
                            <td><a href=#><img src="../assets/icons/delete_Icon.png" alt="delete icon"></a></td>
                        </tr>   
                        <tr>
                            <td>Item 2</td>
                            <td>Rs 600</td>
                            <td><img src="../assets/icons/quantity_minus.png" alt="minus icon">1<img src="../assets/icons/quantity_add.png" alt="add icon"></td>
                            <td>Rs 450</td>
                            <td><a href=#><img src="../assets/icons/delete_Icon.png" alt="delete icon"></a></td>
                        </tr> 
                        
                        <tr>
                            <td>Item 3</td>
                            <td>Rs 400</td>
                            <td><img src="../assets/icons/quantity_minus.png" alt="minus icon">1<img src="../assets/icons/quantity_add.png" alt="add icon"></td>
                            <td>Rs 450</td>
                            <td><a href=#><img src="../assets/icons/delete_Icon.png" alt="delete icon"></a></td>
                        </tr>                        

                </table>

                <!--back button-->
                <button type="button" name="back" class="button2" onclick="window.location.href = '';">Back</button>                    
            </div>
                 

            <!--right cokumn- order total-->
            <div class="rightColumn">
                <table class="orderTable">
                    <tr>
                        <th>Order Total</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Order price</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td></td>
                    </tr>
                </table>

                <!--checkout button-->
                <button type="button" name="checkout" class="button1" onclick="window.location.href = '';">Check out</button> 
            </div>
        </div>
             
    </body>
</html>