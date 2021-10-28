<?php
require_once './../Database/db.con.php';
require_once 'func.php';
    session_start();
  if(isset($_SESSION['info'])){

   extract($_SESSION['info']);
    
    
    // if(emptyInputSinup($name,$email,$phone,$pwd,$repwd) !== false){
    //   header("location: ../register/register.php?error=emptyinput");
    //   exit();
    // }

    // if(invaliduName($name) !== false){
    //   header("location: ../register/register.php?error=invaliduname");
    //   exit();
    // }

    // if(invalidEmail($email) !== false){
    //   header("location: ../register/register.php?error=invalidemail");
    //   exit();
    // }

    if(pwdMatch($pass,$cpass) == false){
      header("location: ../Screens/Registration_Step3.php?error=pwddontmatch");
      exit();
    }

    // if(unameExists($conn, $name, $email) !== false){
    //   header("location: ../register/register.php?error=unametaken");
    //   exit();
    // }
    // if($name == "admin"){
    //   createAdmin($conn, $name, $email, $pwd);
    // }
    // else{
    //   createUser($conn, $name, $email, $phone, $pwd);
    // }

    

    if($user_roles == "Farmer"){
        createFarmer($conn,$fname,$lname,$gender,$email,$user_roles,$nic,$mobile,$address,$landaddress,$landhect,$typeofcrops,$numberofemp,$prof,$uname,$pass);
    }
    else if($user_roles=="Compost_supplier"){
        createCompostSupplier($conn,$fname,$lname,$gender,$email,$user_roles,$nic,$mobile,$address,$workaddress,$typeofcompost,$businessname,$numberofemp,$prof,$uname,$pass);
    }
    else if($user_roles=="Business"){
        createBusiness($conn,$fname,$lname,$gender,$email,$user_roles,$nic,$mobile,$address,$businessname,$bussiness_reg_num,$typeofbusiness,$addressworkplace,$prof,$uname,$pass);
    }
  }
  else if(isset($_POST['submit'])){
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $gender=$_POST['gender'];
    $job_roles=$_POST['job_roles'];
    $email=$_POST['email'];
    $nic= $_POST['nic'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    if(pwdMatch($pass,$cpass) == false){
      header("location: ../Screens/Add_AgriculturalOfficer.php.php?error=passwordnotmatched");
      exit();
    }
    AddModerator($conn,$fname,$lname,$gender,$job_roles,$email,$nic,$mobile,$address,$uname,$pass);
  }
//   else {
//     header("location: ../register/register.php");
//     exit();
//   }