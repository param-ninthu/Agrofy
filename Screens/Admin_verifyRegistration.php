<?php 
    require_once './../includes/func.php';
    require_once './../Database/db.con.php';
    if(isset($_POST['farmer'])){
        $user='farmer';
        $result = getuser($conn,$user);
    }
    else if(isset($_POST['Business'])){
        $user='Business';
        $result = getuser($conn,$user);
    }
    else if(isset($_POST['compost'])){
        $user='compost';
        $result = getuser($conn,$user);
    }
?>

<html lang="en">
<head>
    <title>User verification</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/userVerifications.css"/>
</head>
<body>
    <div class="container">
        <form method="POST" action="Admin_verifyRegistration.php">
            <div class="btn_cls">
                <button type="submit" class="btn" name="farmer"> Farmer </button>
                <button type="submit" class="btn" name="Business"> Business </button>
                <button type="submit" class="btn" name="compost"> Compost </button>
            </div>
        </form>
        <div class="table_display">
            <table class="table">
                <thead>
                    <?php if(isset($_POST['farmer'])){ ?>
                    <tr>
                        <th>Firstname</th>
                        <th>NIC</th>
                        <th>Mobile</th>
                        <th>Land Address</th>
                        <th>Land Hectares</th>
                        <th>Profile</th>
                    </tr>
                    <?php } ?>
                    <?php if(isset($_POST['Business'])){ ?>
                    <tr>
                        <th>Firstname</th>
                        <th>NIC</th>
                        <th>Mobile</th>
                        <th>Bussiness Name</th>
                        <th>Business Reg_No</th>
                        <th>Profile</th>
                    </tr>
                    <?php } ?>
                    <?php if(isset($_POST['compost'])){ ?>
                    <tr>
                        <th>Firstname</th>
                        <th>NIC</th>
                        <th>Mobile</th>
                        <th>Work Address</th>
                        <th>Business Name</th>
                        <th>Profile</th>
                    </tr>
                    <?php } ?>
                </thead>
            
            <?php 
                if($result){
                              
                    while($row = mysqli_fetch_assoc($result)){?>
                        <?php if(isset($_POST['farmer'])) { ?>
                        <tr> 
                            <td><?php echo $row['FIRST_NAME']; ?></td>
                            <td><?php echo $row['NIC']; ?></td>
                            <td><?php echo $row['MOBILE']; ?></td>
                            <td><?php echo $row['LAND_ADDRESS']; ?></td>
                            <td><?php echo $row['LAND_HECTARES']; ?></td>
                            <td><?php echo $row['PROFILE_IMG']; ?></td>
                        </tr>
                        <?php } ?>
                        <?php if(isset($_POST['Business'])) { ?>
                        <tr> 
                            <td><?php echo $row['FIRST_NAME']; ?></td>
                            <td><?php echo $row['NIC']; ?></td>
                            <td><?php echo $row['MOBILE']; ?></td>
                            <td><?php echo $row['BUSINESS_NAME']; ?></td>
                            <td><?php echo $row['BUSINESS_REG_NO']; ?></td>
                            <td><?php echo $row['PROFILE_IMG']; ?></td>
                        </tr>
                        <?php } ?>
                        <?php if(isset($_POST['compost'])) { ?>
                        <tr> 
                            <td><?php echo $row['FIRST_NAME']; ?></td>
                            <td><?php echo $row['NIC']; ?></td>
                            <td><?php echo $row['MOBILE']; ?></td>
                            <td><?php echo $row['WORK_ADDRESS']; ?></td>
                            <td><?php echo $row['BUSINESS_NAME']; ?></td>
                            <td><?php echo $row['PROFILE_IMG']; ?></td>
                        </tr>
                        <?php } ?>
                <?php } } ?>
            </table>
        </div>
    </div>
    
</body>
</html>