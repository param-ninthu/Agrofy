<?php 

function createFarmer($conn, $fname,$lname, $gender,$email,$user_roles, $nic,$mobile,$address,$landaddress,$landhect,$typeofcrops,$numberofemp,$prof,$uname,$pass){
    $userName_exist= identifyUser($conn,$uname); // check whether the username available or not.

    

    if($userName_exist === "Nouser"){

  
    $sql = "INSERT INTO FARMER_REG (FIRST_NAME ,LAST_NAME ,GENDER ,EMAIL ,USER_ROLE ,NIC ,MOBILE ,ADDRESS_ ,LAND_ADDRESS  ,LAND_HECTARES ,TYPE_OF_CROP ,NO_OF_EMPLOYEES , PROFILE_IMG  ,USER_NAME ,PASS,VERIFIED,REJECTED) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../Screens/Registration_Step3.php?error=stmtfailed");
      exit();
    }

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
    $user_role ='farmer';
    $verified_default =false;
    $rejected_default = false;
    mysqli_stmt_bind_param($stmt, "sssssssssssssssss",$fname,$lname, $gender,$email,$user_role, $nic,$mobile,$address,$landaddress,$landhect,$typeofcrops,$numberofemp,$prof,$uname,$hashedPwd,$verified_default,$rejected_default);
    mysqli_stmt_execute($stmt);  
    mysqli_stmt_close($stmt);
    header("location: ../Screens/Login.php?error=none");
    exit();
    }
    else{
      echo '<script>alert("Username already exist")</script>';
      header("location: ../Screens/Registration_Step1.php");
      exit();
    }
  } 

  function createCompostSupplier($conn, $fname,$lname, $gender,$email,$user_roles, $nic,$mobile,$address,$workaddress,$typeofcompost,$businessname,$numberofemp,$prof,$uname,$pass){
    $userName_exist= identifyUser($conn,$uname);

    if($userName_exist === "Nouser"){
    $sql = "INSERT INTO COMPOST_SUP_REG (FIRST_NAME ,LAST_NAME ,GENDER ,EMAIL ,USER_ROLE ,NIC ,MOBILE ,ADDRESS_ ,WORK_ADDRESS  ,TYPE_OF_COMPOST ,BUSINESS_NAME ,NO_OF_EMPLOYEES , PROFILE_IMG  ,USER_NAME ,PASS,VERIFIED,REJECTED) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../Screens/Registration_Step3.php?error=stmtfailed");
      exit();
    }

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
    $verified_default =false;
    $rejected_default = false;
    mysqli_stmt_bind_param($stmt, "sssssssssssssssss",$fname,$lname, $gender,$email,$user_roles,$nic,$mobile,$address,$workaddress,$typeofcompost,$businessname,$numberofemp,$prof,$uname,$hashedPwd,$verified_default,$rejected_default);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Screens/Registration_Step3.php?error=none");
    exit(); 
    }
    else{
      echo '<script>alert("Username already exist")</script>';
      header("location: ../Screens/Registration_Step1.php");
      exit();
    }
  } 

  function createBusiness($conn, $fname,$lname, $gender,$email,$user_roles,$nic,$mobile,$address,$businessname,$bussiness_reg_num,$typeofbusiness,$addressworkplace,$prof,$uname,$pass){
    $userName_exist= identifyUser($conn,$uname);

    if($userName_exist === "Nouser"){
    $sql = "INSERT INTO BUSINESS_REG (FIRST_NAME ,LAST_NAME ,GENDER ,EMAIL ,USER_ROLE ,NIC ,MOBILE ,ADDRESS_ ,BUSINESS_NAME ,BUSINESS_REG_NO ,TYPE_OF_BUSINESS ,ADDRESS_WORK_PLACE , PROFILE_IMG  ,USER_NAME ,PASS,VERIFIED,REJECTED) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../Screens/Registration_Step3.php?error=stmtfailed");
      exit();
    }

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
    $verified_default =false;
    $rejected_default = false;
    mysqli_stmt_bind_param($stmt, "sssssssssssssssss",$fname,$lname,$gender,$email,$user_roles,$nic,$mobile,$address,$businessname,$bussiness_reg_num,$typeofbusiness,$addressworkplace,$prof,$uname,$hashedPwd,$verified_default,$rejected_default);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Screens/Registration_Step3.php?error=none");
    exit();
    }
    else{
      echo '<script>alert("Username already exist")</script>';
      header("location: ../Screens/Registration_Step1.php");
      exit();
    }
  } 


  function pwdMatch($pwd,$repwd) {
    $result;
    if($pwd !== $repwd){
      $result= false;
    }
    else{
      $result = true;
    }
    return $result;
  }

  function getuser($conn,$user){
    if($user == 'farmer'){
      $sql ="SELECT * FROM FARMER_REG WHERE VERIFIED=FALSE AND REJECTED=FALSE";
    }
    else if($user == 'Business'){
      $sql ="SELECT * FROM BUSINESS_REG WHERE VERIFIED=FALSE AND REJECTED=FALSE";
    }
    else if($user =='compost'){
      $sql ="SELECT * FROM COMPOST_SUP_REG WHERE VERIFIED=FALSE AND REJECTED=FALSE";
    }

    $result = mysqli_query($conn,$sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
      else{
        header("location: ../Screens/User_verification.php?error=userdata_not_found");
        exit();
      }
  }


  function verifyuser($conn){
    if(isset($_GET['NIC']) && isset($_GET['user-role'])){

      $nic=$_GET['NIC'];
      $user_role = $_GET['user-role'];

      if($user_role== 'farmer'){
        $sql = "UPDATE FARMER_REG SET VERIFIED=TRUE WHERE NIC=?";
      }
      else if($user_role=='business'){
        $sql = "UPDATE BUSINESS_REG SET VERIFIED=TRUE WHERE NIC=?";
      }
      else if($user_role=='compost'){
        $sql = "UPDATE COMPOST_SUP_REG SET VERIFIED=TRUE WHERE NIC=?";
      }     
      $verify_user = mysqli_query($conn,$sql); ///
      $stmt = mysqli_stmt_init($conn); //
      if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Screens/User_Verification.php?error=stmtfailed");
        exit();
      }
      mysqli_stmt_bind_param($stmt,"s",$nic);
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
      if($user_role== 'farmer'){
        $sql = "UPDATE FARMERS_REG SET REJECTED=TRUE WHERE NIC=?";
      }
      else if($user_role=='business'){
        $sql = "UPDATE BUSINESS_REG SET REJECTED=TRUE WHERE NIC=?";
      }
      else if($user_role=='compost'){
        $sql = "UPDATE COMPOST_SUP_REG SET REJECTED=TRUE WHERE NIC=?";
      }    
      $verify_user = mysqli_query($conn,$sql);
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Screens/User_Verification.php?error=stmtfailed");
        exit();
      }
      mysqli_stmt_bind_param($stmt,"s",$nic);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);

      
      header("location: ../Screens/User_Verification.php?nic=$nic&status=rejected");
      exit();
        
      
    }
  }


  function identifyUser($conn,$uname){
    $sql ="SELECT * FROM FARMER_REG WHERE USER_NAME='$uname'";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("location: ../Screens/Login.php?error=statmentfailed-Farmer");
      exit();
    }
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_num_rows($result);
    $result_data = mysqli_fetch_assoc($result);
    if($row==0){
      $sql ="SELECT * FROM BUSINESS_REG  WHERE USER_NAME='$uname'";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../Screens/Login.php?error=statmentfailed-Farmer");
        exit();
      }
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $row = mysqli_num_rows($result);
      $result_data = mysqli_fetch_assoc($result);
      if($row == 0){
       $sql ="SELECT * FROM COMPOST_SUP_REG WHERE USER_NAME='$uname'";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql)){
         header("location: ../Screens/Login.php?error=statmentfailed-Farmer");
         exit();
       }
       mysqli_stmt_execute($stmt);
       $result = mysqli_stmt_get_result($stmt);
       $row = mysqli_num_rows($result);
       $result_data = mysqli_fetch_assoc($result);
       if($row==0){
         $result_data ="Nouser";
         return $result_data;
       }
       else{
         return $result_data;
        }

      }
      else{
       return $result_data;
      }
    }
    else{
      return $result_data;
    }
  }



  function userLogin($conn,$uname,$pass){
    $userExist = identifyUser($conn,$uname);
    if($userExist === "Nouser"){
      echo '<script>alert("Invalid Username")</script>';
      header("location: ../Screens/Login.php?error=invalidusername");
      exit();
    }

    $verified = $userExist['VERIFIED']; // $verified= true   // $verified = false
    $rejected =$userExist['REJECTED']; // $rejected= true   // $rejected = false
    // -> verified = false rejected =true
    // -> verfied =true rejected=false

    if($verified== true){
      $passHashed = $userExist["PASS"];
    
      $verifyPass = password_verify($pass,$passHashed);
      if($verifyPass == false){
        header("location: ../Screens/Login.php?error=invalidpassword");
        exit();
      }
      else if ($verifyPass == true){
        session_start();
        $_SESSION["userName"]=$userExist["USER_NAME"];
        $_SESSION["name"] =$userExist["FIRST_NAME"];
        if($userExist["USER_ROLE"] == 'farmer'  ){
            header("location: ../Screens/Farmer_dashboard.php");
            exit();
        }
        else  if($userExist["USER_ROLE"] == 'Compost_supplier'  ){
            header("location: ../Screens/CompostSupplierDashboard.php");
            exit();
        }
        else  if($userExist["USER_ROLE"] == 'Business'){
            header("location: ../Screens/BussinessDashboard.php");
            exit();
        }
      }
    }
    else if($rejected==true){
      echo '<script>alert("Hi '.$userExist['FIRST_NAME'].' your registration has been rejected.")</script>';
      header('location:../Screens/Registration_Step1.php?rejected');
      exit();
    }
   else if(($verified==false) && ($rejected==false)) {
      echo '<script>alert("Hi '.$userExist['FIRST_NAME'].' your registration is not verified yet.")</script>';
      header('location:../Screens/Login.php?notverifiedyet');
      exit();
    }
  }

  function deleteUser($conn){
    if(isset($_GET['nic']) && isset($_GET['user-role'])){
       $nic = $_GET['nic'];
       $user = $_GET['user-role'];
      if($user == 'Farmer'){
      $sql ="DELETE FROM FARMER_REG WHERE NIC='$nic' ";
      }
      else if($user == 'Business'){
        $sql ="DELETE FROM BUSINESS_REG WHERE NIC='$nic'";
      }
      else if($user =='Compost'){
        $sql ="DELETE FROM COMPOST_SUP_REG WHERE NIC='$nic' ";
      }
       $delete_user = mysqli_query($conn,$sql);
       if($delete_user){
         header("location: ../Screens/Admin_Dashboard.php");
       }
    }
  }

?>