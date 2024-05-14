<?php
include('config.php');

if(isset($_POST['upload']) && $_FILES['image']['error'] == 0){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $imagelocation = $_FILES['image']['tmp_name'];
    $imagename = preg_replace("/[^a-zA-Z0-9.]/", "", basename($_FILES['image']['name']));
    $imageup = "images/" . $imagename;
    $targetPath = __DIR__ . "/" . $imageup;
    if (!is_dir('images')) {
        mkdir('images', 0777, true);
    }
    $check = getimagesize($imagelocation);
    if($check !== false) {
        if(move_uploaded_file($imagelocation, $targetPath)){
            $insert = "INSERT INTO product (name, price, image) VALUES ('$name', '$price', '$imageup')";
            if(mysqli_query($cont, $insert)){
                echo "Product uploaded successfully.";
                header('Location: owner.php');
                exit();
            } else {
                echo "Error: " . mysqli_error($cont);
            }
        } else {
            echo "Error uploading file.";
        }
    } else {
      echo "File is not an image.";
    }
} else {
    if ($_FILES['image']['error'] !== 0) {
        echo "Error in file upload: " . $_FILES['image']['error'];
    }
}

?>
