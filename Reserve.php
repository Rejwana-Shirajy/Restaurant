<?php 
require_once "config.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservation</title>
  

<link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
if(isset($_POST["reserve"])){
     
    $rname =  $_POST['rename'];
	  $remail = $_POST['email'];
      $rphone =$_POST['phone'];
      $date = $_POST['date'];
      $time =$_POST['time'];
      $person =$_POST['person'];
  	

      $e = "INSERT INTO reservation (rname,email,phone,date,time,person)  VALUES ('$rname', '$remail','$rphone','$date','$time','$person')";

      
      mysqli_query($link, $e);
      echo( mysqli_error($link));
      header("location:welcome.php");
       
      $result = mysqli_query($link, "SELECT * FROM reservation");?>
<table ><?php

      while ($row = mysqli_fetch_array($result)) {
        ?>
            
            <tr> 
            <th>id </th>
            <th>Name </th>
            <th>Email </th>
            <th>Phone Number </th>
            <th>Date </th>
            <th>Time </th>
            <th>Person</th>
            </tr>
            <tr> 
            <td> <?php echo $row['rid'];?></td>
              <td> <?php echo $row['rname'];?></td>
              <td> <?php   echo $row['email'];?></td>
              <td> <?php   echo $row['phone'];?></td>
              <td> <?php   echo $row['date'];?></td>
              <td> <?php   echo $row['time'];?></td>
              <td> <?php   echo $row['person'];?></td>
              
              </tr>
             
      

               
     <?php }?>
      </table><?php 
      
}
?>

  
</body>
</html>
