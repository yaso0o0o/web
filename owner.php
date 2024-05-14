<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>owner</title>
    <link rel="stylesheet" href="owner.css">
      
</head>
<body>
  <center>

    <div class="main">

      <form action="insert.php" method="post" enctype="multipart/form-data"> 
      <h1>Shoping online</h1>
         <img width="200px" src="entrepreneur.jpeg" alt="owner">
       <br>
       <br>
          <input type="text" name='name' placeholder="Name's product"><br>
          <input type="text" name='price' placeholder="Price's product"><br><br>
          <input type="file" id="image" name='image' style='display: none;'>
          <label for="image">Upload Image</label>
          <button type="submit" name='upload'>Upload Product</button> <br>
          <a href="products.php">show all products</a> 
      </form>
      
    </div>
  </center>
</body>
</html>