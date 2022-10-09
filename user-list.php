<h1>User List</h1>

<?php
  session_start();
  require_once "config.php";

   $result = mysqli_query($link, "SELECT * FROM users");?>
<table ><?php

      while ($row = mysqli_fetch_array($result)) {
        ?>
            
            <tr> 
            <th>id </th>
            <th>Name </th>
            
            
            </tr>
            <tr> 
            <td> <?php echo $row['id'];?></td>
              <td> <?php echo $row['username'];?></td>
              
              
              
              </tr>
             
      

               
     <?php }?>
      </table>
  
     

 
      
    <style>
table, th, td {
  border: 2px solid black;
  
}

body{
          
          margin-left: 40%;
          margin-top: 4%;

        }
        </style>

