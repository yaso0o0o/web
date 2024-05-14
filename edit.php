<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing</title>
    <link rel="stylesheet" href="owner.css">

</head>
<body>
<?php

include('config.php');
$id = $_GET['id'];
$up = mysqli_query($cont , "SELECT * FROM product WHERE id=$id");
$data = mysqli_fetch_array($up);

?>
  <center>
    <div class="main">
      <form action="up.php" method="post" enctype="multipart/form-data"> 
         <h1>UPDATE</h1>
         <input type="text" name='id' placeholder="ID's product" value = '<?php echo $data ['id']?>' readonly><br><br>
         <input type="text" name='name' placeholder="Name's product" value ='<?php echo $data ['name']?>'><br><br>
         <input type="text" name='price' placeholder="price's product" value = '<?php echo $data ['price']?>'><br><br>
         <input type ="file" id ="file" name= 'image' style = 'display: none;' >
         <label for="file">update image</label>
          <button name='update' type = 'submit'> update product</button><br><br>
      </form>
    </div>
  </center>
</body>
</html>
