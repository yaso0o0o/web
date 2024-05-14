<?php
include ("configUser.php"); 
    
    
   if(isset($_POST['Register'])){ 
       $Fname=$_POST['firstName'];
       $Lname=$_POST['lastName'];
       $Email=$_POST['email'];
       $Password=$_POST['password'];
       $NewHostname = "77designs"; 

      //to prevent attacks 
      //? for placeholder
      $checkEmail= "SELECT * FROM user WHERE Email=?";
      $Em_Stat= mysqli_prepare($cont, $checkEmail);
      mysqli_stmt_bind_param($Em_Stat,"s",$Email);
      mysqli_stmt_execute($Em_Stat);
      $Em_Stat_Res=mysqli_stmt_get_result($Em_Stat);
  
   
     if(mysqli_num_rows($Em_Stat_Res)>0){
      echo "<script>alert('Email already in use on $NewHostname');</script>";
      echo "<script>window.location.href = 'signup.php';</script>";
      exit();
         }else{
          $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
          $insert = "INSERT INTO user (FirstName, LastName, Email, Password) VALUES (?,?,?,?)";
          $insert_stat = mysqli_prepare($cont, $insert);
          mysqli_stmt_bind_param($insert_stat,'ssss', $Fname, $Lname, $Email, $hashedPassword);
          mysqli_stmt_execute($insert_stat);
           


    if(mysqli_stmt_affected_rows($insert_stat)>0) {
      echo "<script>window.location.href = 'showproduct.php';</script>"; 
        exit();
    } else {
      echo "<script>alert('Error in $NewHostname system');</script>";
      echo "<script>window.location.href = 'signup.php';</script>"; 
      exit();
    }
         }
  }
$cont->close();
?>
