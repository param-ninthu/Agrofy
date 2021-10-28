<?php
require_once './../Database/db.con.php';
require_once 'func.php';

  if(isset($_POST['submit'])){
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
      header("location: ../Screens/Add_AgriculturalOfficerphp?error=passwordnotmatched");
      exit();
    }
    AddModerator($conn,$fname,$lname,$gender,$job_roles,$email,$nic,$mobile,$address,$uname,$pass);
  }
