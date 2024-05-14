<?php 

  include ("configUser.php");


  if(isset($_POST['Login'])){
     $Un_Em= $_POST['email'];
     $password= $_POST['password'];
     $NewHostname = "77designs"; 
     
     $query = "SELECT * FROM user WHERE Email=? ";
     $query_stat = mysqli_prepare($cont, $query);
     mysqli_stmt_bind_param($query_stat,"s", $Un_Em);
     mysqli_stmt_execute($query_stat);
     $query_stat_res=mysqli_stmt_get_result($query_stat);
 
     if(mysqli_num_rows($query_stat_res)!==0){
         $row=mysqli_fetch_assoc($query_stat_res);
            $hashedPassword=$row['Password'];

         if(password_verify($password, $hashedPassword)){
             echo "<script>alert('Welcome to $NewHostname');</script>";
             echo "<script>window.location.href = 'showproduct.php';</script>";
             exit();
         } else {
             echo "<script>alert('Invalid login...please try again');</script>";
             echo "<script>window.location.href = 'login.php';</script>";
            exit(); 
            }
        }
 }

 ?>