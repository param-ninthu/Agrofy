<?php
require_once "./../Database/db.con.php";
require_once "./../includes/func.php";
$user_name =$_GET['nic'];
$result = compostsup_Viewfeedback_User($conn,$user_name);
?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/addfeedback_popup.css"/>
    <title>PopUP</title>
</head>
<body>
    <div class="container">
        <div class="side_nav">
            <img src="./../assets/icons/logo.png">
        </div>
        <div class="main_container">
            <div class="form_container">
                <div class="title_container">
                        <h2>Add Feedback</h2>
                        <hr>
                </div>
                <form action="./../includes/update_feedback.php" method="post">
                                         
                    <input type="text" name="uname" value=<?php echo $user_name ?> readonly hidden>
                    
                    <div class="input_container">
                        <label> Name </label>                        
                        <input type="text" name="name" value=<?php echo $result['FIRST_NAME'] ?> readonly>
                    </div>
                    <div class="input_container">
                        <label> Item Purchased </label>                        
                        <input type="text" name="itempurchased" value=<?php echo $result['ITEM_PURCHASED'] ?> readonly>
                    </div>
                    <div class="input_container">
                            <label>Rate</label>
                            <div class="rating">
                                <div class="num">
                                    <label>1</label>
                                    <input type="radio" name="rate" value="1">
                                </div>  
                                <div class="num">
                                    <label>2</label>
                                    <input type="radio" name="rate" value="2">
                                </div>
                                <div class="num">
                                    <label>3</label>
                                    <input type="radio" name="rate" value="3">
                                </div>  
                                <div class="num">
                                    <label>4</label>
                                    <input type="radio" name="rate" value="4">
                                </div>
                                <div class="num">
                                    <label>5</label>
                                    <input type="radio" name="rate" value="5">
                                </div>
                            </div>
                    </div>
                    <div class="input_container">
                        <label> Feedback </label>                        
                        <input type="text" name="feedback" id="">
                    </div>
                    <div class="button_container">
                         <button type="submit" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>