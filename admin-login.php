

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
 </head>
  <body>
  <div class="wrapper">
  
  	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group"> name:<input type="text" name="name" Required><br> </div>
    <div class="form-group"> password:<input type="password" name="password" Required><br></div>
       <input type="submit" value="submit">
</div>  
</form>





<?php

$aname1="ReTo";

$password="neub123";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST['name'];
    $p=$_POST['password'];
   $a= strcmp($aname1,$name);
    
    	if ($a!=0 ) {
   die('name should match!');   
}
if ($p !==$password ) {
   die(' password should match!');   
}
else
header("location: admin.php");
die();
    }

?>
</body>
</html>