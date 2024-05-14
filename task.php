<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <title>77designs.com</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="icon" href="brain.icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<header>
<a href="#" class="logo">77designs</a>
<ul>
<li><a href="#">Home</a></li>
<li><a href="login.php" id="loginBtn">Sign IN </a></li>
<li><a href="signup.php" id="registerBtn">Sign UP</a></li>
</ul>
</header>
<section>
<img src="stars.png" id="stars">
<img src="moon.png" id="moon">
<h2 id="text">Grow Your Design</h2>
<img src="mountains_behind.png" id="mountains_behind">
<a href="#sec" id="btn">Explor</a>
<img src="mountains_front.png" id="mountains_front">
</section>
<div class="sec" id="sec">
<h2>Design for what you need?</h2>

<img  width="270px"src="imgd.jpeg" alt="">
  <img width="300px"  src="imgs.jpeg" alt=""> 
<img  width="400px" src="imgt.jpeg" alt="">
<br>
<a href="signup.php" id="moreBtn">  FOR MORE </a>
<br> 
<br>
<br>
<br>
<br>
<br>
<h2>Your business<br>
  <u>deserves</u> great design</h2>
  <h3>Logos, websites, packaging design and more. Our trusted<br>
     designer community has helped thousands of businesses <br>
     launch, grow, expand and rebrand with custom, professional design.</h3>
     <br>
     <img src="logo33.jpeg" width="1100px" height="600px"  alt="imaga">
<br>
<br>
<br>
<br>
<br>
        <center> <p> <h2>It all starts with a logo</h2> </p> </center>
        <center> <p>  <h3>Whether you're brand new or on brand two (or three!), we've got a solution that'll suit<br>
         your business and elevate your branding.</h3></p> </center>
         <br>
         <img src="ss.gif" width="1100px" height="600px"  alt="gif">
        <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <h2>Work with creative<br>
           <u>experts</u> you can trust</h2>
           <h3>Feel confident working with our <br>
            designer community. All our designers are vetted creative experts who've worked with<br>
             hundreds of businesses to bring their designs to life.
           </h3>
           <a href="signup.php">Browse designer portfolios&rarr;</a>
           <br>
           <img  width="300px" src="img4.jpeg" alt="">
     <img  width="300px" src="img5.jpeg" alt="">
     <img  width="300px" src="img6.jpeg" alt="">
         <br>
         <br>
         <br>
         <br>
         <br>
           <h2><u>Printing</u> your custom design is easier than ever</h2>
<h3>The fastest, easiest way to get your 
  custom design and share it with the world. When you<br> 
  work closely with a professional designer, it takes just one click to send completed files<br>
   to VistaPrint.</h3> <a href="signup.php"> View all design categories&rarr;</a>
   <br>
   <br>
   <img src="tt.gif" width="1100px" height="600px"  alt="gif">
   </video>
   <br>
   <br>
   <hr>
   <br>
   <br>
<footer>
<div class="footer-content">
    <a href="contactus.php" id="btn">CREAT YOUR DESIGN</a>
<div class="footer-section about">
<h3>About Us</h3>
  <p></p>
 <div class="contact">
<span><i class="bx bxs-envelope"></i> wgraphic484@gmail.com</span>
<span><i class="bx bxs-phone"></i> +01135678540</span>
  </div>
 <div class="socials">
<a href="https://www.facebook.com/profile.php?id=61559166057418" target="_blank"><i class="bx bxl-facebook"></i></a>
<a href="https://twitter.com/WebGraphic78898" target="_blank"><i class="bx bxl-twitter"></i></a>
 <a href="https://www.instagram.com/graphic.w/?next=%2F" target="_blank"><i class="bx bxl-instagram"></i></a>
  </div>
</div>
<div class="footer-section links">
<h3>Quick Links</h3>
<ul>
  <li><a href="#">Home</a></li>
 <li><a href="aboutus.php">About Us</a></li>
 <li><a href="login.php">Services</a></li>
 <li><a href="contactus.php">Contact</a></li>
</ul>
</div>
 <div class="footer-section contact-form">

  <div class="footer-bottom">
&copy; 2024 77designs.com | Designed by 77designs
  </div>
</footer>
<br>
<br>
<hr>
<hr>
 </footer>
<script>
  let stars = document.getElementById("stars");
  let moon = document.getElementById("moon");
  let mountains_behind = document.getElementById("mountains_behind");
  let text = document.getElementById("text");
  let btn = document.getElementById("btn");
  let mountains_front = document.getElementById("mountains_front");
  let header = document.querySelector('header');
  
  window.addEventListener('scroll', function() {
      let value = window.scrollY;
      stars.style.left = value * 0.25 + 'px';
      moon.style.top = value * 1.05 + 'px';
      mountains_behind.style.top = value * 0.5 + 'px';
      mountains_front.style.top = value * 0 + 'px';
      text.style.marginRight = value * 4 + 'px';
      text.style.marginTop = value * 1.5 + 'px';
      btn.style.marginTop = value * 1.5 + 'px';
      header.style.top = value * 0.5 + 'px';
  });
  </script>
</body>
</html>