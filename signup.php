<?php  
include("configUser.php");
$NewHostname = "77designs"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="signup.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="add-friend.icon">
</head>
<body>
    
    <form class="register-container" id="register" enctype="multipart/form-data" action="insertUser.php" method="POST">
        <div class="top">
            <span>Have an account?<a href="login.php" id="login-link">Login</a></span>
            <header>Sign Up</header>
        </div>
        <div class="two-forms">
            <div class="input-box">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" class="input-field" placeholder="First Name" pattern="[A-Za-z]+" title="First Name should contain only alphabetic characters" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" class="input-field" placeholder="Last Name"pattern="[A-Za-z]+" title="First Name should contain only alphabetic characters" required>
                <i class='bx bxs-user'></i>
            </div>
        </div>
        <div class="input-box">
            <label for="Email">Email</label>
            <input type="email" name="email" id="Email" class="text-input contact-input" placeholder=" Email" pattern="[^\s@]+@[^\s@]+\.[^\s@]+" title="Please enter a valid email address" required>
            
            <i class='bx bx-envelope'></i>
        </div>
        <div class="input-box">
            <label for="registerPassword">Password</label>
            <input  type="password" name="password" id="registerPassword" class="text-input contact-input" placeholder="Password" title="Password must be between 9 and 18 characters long and include at least one uppercase letter, one lowercase letter, one digit, and one special character" required>
    
            <i class='bx bx-lock-alt'></i>
        </div>
        <button type="submit" name="Register" class="Button-link">Register</button>
        <div class="two-col">
            <div class="one">
                <input type="checkbox" id="register-check" required>
                <label for="register-check">Remember Me.</label>
            </div>
        </div>
    </form>
   </body>
</html>
