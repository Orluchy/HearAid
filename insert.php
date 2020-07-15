<?php 
   $servername = '';
   $username = 'Orluchy';
   $password = 'cherries11!';
   $database = '';
   
   $connection = mysqli_connect($servername, $username, $password, $database) or die(mysqli_connect_error());

  if(isset ($_POST['email'])){
    
    if(!$connection){
        $emailer = $_POST['email'];
        $sql = "INSERT INTO emails (email) VALUES ('$emailer')";
        $load = mysql_query($connection,$sql) or mysqli_connect_error($connection);
    
         
      if($load) {
          echo "Thanks for subscribing!";
      }
      else {
          echo "There was an error!";
      }

    }
  }
?>
