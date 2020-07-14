<?php 
   $servername = 'localhost';
   $username = 'Orluchy';
   $password = 'cherries11!';
   $database = 'hear_aid';
   
   $connection = mysqli_connect($servername, $username, $password, $database) or die(mysqli_connect_error());

  if(isset ($_POST['email'])){
    
    if(!$connection){
        $emailer = $_POST['email'];
        $sql = "INSERT INTO emails (email) VALUES ('$emailer')";
        $move = mysql_query($connection,$sql) or mysqli_connect_error($connection);
    }
         
      if($move) {
          echo "Thanks for subscribing!";
      }
      else {
          echo "There was an error!";
      }
  }
?>
