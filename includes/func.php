<?php 

function createFarmer($conn, $fname,$lname, $gender,$email,$user_roles, $nic,$mobile,$address,$landaddress,$landhect,$typeofcrops,$numberofemp,$prof,$uname,$pass){
    $sql = "INSERT INTO FARMER_REG (FIRST_NAME ,LAST_NAME ,GENDER ,EMAIL ,USER_ROLE ,NIC ,MOBILE ,ADDRESS_ ,LAND_ADDRESS  ,LAND_HECTARES ,TYPE_OF_CROP ,NO_OF_EMPLOYEES , PROFILE_IMG  ,USER_NAME ,PASS) VALUES (?, ?, ?, ?,?,?, ?, ?, ?,?,?, ?, ?, ?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../Screens/Registration_Step3.php?error=stmtfailed");
      exit();
    }

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssssssssssss",$fname,$lname, $gender,$email,$user_role, $nic,$mobile,$address,$landaddress,$landhect,$typeofcrops,$numberofemp,$prof,$uname,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Screens/Registration_Step3.php?error=none");
    exit();
  } 

  function createCompostSupplier($conn, $fname,$lname, $gender,$email,$user_roles, $nic,$mobile,$address,$workaddress,$typeofcompost,$businessname,$numberofemp,$prof,$uname,$pass){
    $sql = "INSERT INTO COMPOST_SUP_REG (FIRST_NAME ,LAST_NAME ,GENDER ,EMAIL ,USER_ROLE ,NIC ,MOBILE ,ADDRESS_ ,WORK_ADDRESS  ,TYPE_OF_COMPOST ,BUSINESS_NAME ,NO_OF_EMPLOYEES , PROFILE_IMG  ,USER_NAME ,PASS) VALUES (?, ?, ?, ?,?,?, ?, ?, ?,?,?, ?, ?, ?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../Screens/Registration_Step3.php?error=stmtfailed");
      exit();
    }

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssssssssssss",$fname,$lname, $gender,$email,$user_roles, $nic,$mobile,$address,$workaddress,$typeofcompost,$businessname,$numberofemp,$prof,$uname,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Screens/Registration_Step3.php?error=none");
    exit();
  } 

  function createBusiness($conn, $fname,$lname, $gender,$email,$user_roles, $nic,$mobile,$address,$businessname,$businessregiterednum,$typeofbusiness,$addressworkplace,$prof,$uname,$pass){
    $sql = "INSERT INTO BUSINESS_REG (FIRST_NAME ,LAST_NAME ,GENDER ,EMAIL ,USER_ROLE ,NIC ,MOBILE ,ADDRESS_ ,BUSINESS_NAME ,BUSINESS_REG_NO ,TYPE_OF_BUSINESS ,ADDRESS_WORK_PLACE , PROFILE_IMG  ,USER_NAME ,PASS) VALUES (?, ?, ?, ?,?,?, ?, ?, ?,?,?, ?, ?, ?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../Screens/Registration_Step3.php?error=stmtfailed");
      exit();
    }

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssssssssssss",$fname,$lname, $gender,$email,$user_roles, $nic,$mobile,$address,$businessname,$businessregiterednum,$typeofbusiness,$addressworkplace,$prof,$uname,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Screens/Registration_Step3.php?error=none");
    exit();
  } 


  function pwdMatch($pwd,$repwd) {
    $result;
    if($pwd !== $repwd){
      $result= true;
    }
    else{
      $result = false;
    }
    return $result;
  }

  function getuser($conn,$user){
    if($user == 'farmer'){
      $sql ="SELECT FIRST_NAME , NIC , LAND_ADDRESS , LAND_HECTARES , MOBILE ,PROFILE_IMG FROM FARMER_REG ";
    }
    else if($user == 'Business'){
      $sql ="SELECT FIRST_NAME , NIC , BUSINESS_NAME , BUSINESS_REG_NO , MOBILE ,PROFILE_IMG  FROM BUSINESS_REG";
    }
    else if($user =='compost'){
      $sql ="SELECT FIRST_NAME , NIC , WORK_ADDRESS , TYPE_OF_COMPOST , MOBILE ,PROFILE_IMG FROM COMPOST_SUP_REG ";
    }

    $result = mysqli_query($conn,$sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }

      else{
        header("location: ../Screens/Admin_verifyRegistration.php?error=userdata_not_found");
        exit();
      }
  }


?>