<h1>Reservation List</h1>

<?php
  session_start();
  require_once "config.php";

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
      </table>
      
      
  
     

 
      
    <style>
table, th, td {
  border: 2px solid black;
}
body{
          
          margin-left: 30%;
          margin-top: 4%;
        }
        </style>

