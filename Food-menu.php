<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food-Menu</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>


<?php
include "config.php";
  
  
  $msg = "";

  
  if (isset($_POST['upload'])) {
  	
  	$image = $_FILES['image']['name'];
	  
	  $Foodname = mysqli_real_escape_string($link, $_POST['Foodname']);
	  $Foodprice = mysqli_real_escape_string($link, $_POST['price']);
  	$image_text = mysqli_real_escape_string($link, $_POST['image_text']);

  	
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, Foodname,price,image_text) VALUES ('$image', '$Foodname','$Foodprice','$image_text')";
  	
  	mysqli_query($link, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($link, "SELECT * FROM images");
?>

<section class="product-section bg-img py-3">
  <div class="container">

  <?php
  
    while ($row = mysqli_fetch_array($result)) {?>
	  
	  <div class="row">
      <div class="col-md-3 d-flex">
        <div class="product glow">
          <div class="img d-flex align-items-center justify-content-center">
		 <?php echo "<img src='images/".$row['image']."' >";?>
		 <div class="icons">
              <p class="icon-block d-flex">
                <a href="cart.php" class="d-flex align-items-center justify-content-center">
                   <i class="fas fa-shopping-cart"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center">
                  <i class="fas fa-heart"></i></a>
                
              </p>
            </div>
		 <?php
		  echo "</div>";
		   echo" <p>".$row['Foodname']."</p>";
		   echo "<p>".$row['image_text']."</p>";
      echo"<p>".$row['price']."</p>";?>
      <a href="delete.php?pid=<?php echo $row["pid"] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"> Delete </a>
      	
	 
	 <?php echo "</div>";
	  echo "</div>";
    echo "</div>";
    
	}
	
  ?>
  </div>
  </section>


  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>
</html>