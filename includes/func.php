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


  function verifyuser($conn){
    if(isset($_GET['NIC']) && isset($_GET['user-role'])){

      $nic=$_GET['NIC'];
      $user_role = $_GET['user-role'];


      $sql = "INSERT INTO VERIFIED_USER (NIC ,USER_ROLE) VALUES (?, ?);";
      $verify_user = mysqli_query($conn,$sql); ///
      $stmt = mysqli_stmt_init($conn); //
      if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Screens/User_Verification.php?error=stmtfailed");
        exit();
      }
      mysqli_stmt_bind_param($stmt, "ss",$nic,$user_role);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);

      
      header("location: ../Screens/User_Verification.php?nic=$nic&status=verified");
      exit();  
    }
  }
  

  function rejectuser($conn){
    if(isset($_GET['NIC']) && isset($_GET['user-role'])){

      $nic=$_GET['NIC'];
      $user_role = $_GET['user-role'];


      $sql = "INSERT INTO NOTVERIFIED_USER (NIC ,USER_ROLE) VALUES (?, ?);";
      $verify_user = mysqli_query($conn,$sql);
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Screens/User_Verification.php?error=stmtfailed");
        exit();
      }
      mysqli_stmt_bind_param($stmt, "ss",$nic,$user_role);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);

      
      header("location: ../Screens/User_Verification.php?nic=$nic&status=not_verified");
      exit();
        
      
    }
  }


  function identifyUser($conn,$uname){
    $sql = "SELECT USER_ROLE FROM NOTVERIFIED_USER WHERE NIC=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("location:../Screens/Login.php?error=statmentfailed");
      exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$uname);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result)==0){
      $sql = "SELECT USER_ROLE FROM VERIFIED_USER WHERE NIC=?";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_bind_param($stmt,"s",$uname);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt); 
      
        if(mysqli_num_rows($result)==0){
          $result_value = 'notverified';
          return $result_value;  //You are not verified yet//
        }
        else{
          $row = mysqli_fetch_assoc($result); // Verified
          return $row;
        }
    }
    else{
      $userVerified = 'rejected'; // Rejected
      return $userVerified;
    }

  }



  function userExists($conn,$uname){
    $userStatus = identifyUser($conn,$uname);

    if($userStatus == 'notverified'){
      
    }

  }



  function userLogin($conn,$uname,$pass){
    userExists($conn,$uname);
  }

?>