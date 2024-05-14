<?php  
include("configUser.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="add-friend.icon">
</head>
<body>
    <form action="loginUser.php" enctype="multipart/form-data" class="login-container" id="login" method="POST">
        <div class="top">
            <span>Don't have an account?<a href="signup.php" id="signup-link">Sign Up</a> </span>
            <header>Login</header>
        </div>
      
        <div class="input-box">
            <label for="Email&UserName">Email&UserName</label>
            <input type="email" name="email" id="Email" class="text-input contact-input" placeholder="Email" pattern="[^\s@]+@[^\s@]+\.[^\s@]+" title="Please enter a valid email address"  required>
            <i class='bx bxs-envelope'></i>
        </div>
      
        <div class="input-box">
            <label for="registerPassword">Password</label>
            <input type="password" name="password" id="registerPassword" class="text-input contact-input" placeholder="Password"  title="Password must be between 9 and 18 characters long and include at least one uppercase letter, one lowercase letter, one digit, and one special character" required>
            <i class='bx bx-lock-alt'></i>
        </div>
        <button type="submit" name="Login" class="Button-link">Login</button>
        <div class="two-col">
            <div class="one">
                <input type="checkbox" id="login-check" required>
                <label for="login-check">Remember Me.</label>
            </div>
            <div class="two">
                <label><a href="#">Forgot password?</a></label>
            </div>
        </div>
      </form>
</body>
</html>