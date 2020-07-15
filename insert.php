<?php 
   $servername = 'us-cdbr-east-02.cleardb.com';
   $username = 'bf750b3af7248a';
   $password = '36c65423';
   $database = 'heroku_077af2559d593c4';
   
   $conn = mysqli_connect($servername, $username, $password, $database) or die(mysqli_connect_error());

  if(isset ($_POST['submit'])) {
    
        $email = $_POST['email'];
        $query = "INSERT INTO emails (email) VALUES ('$email')";
        $load = mysql_query($conn,$query) or mysqli_connect_error($conn);
    
         
      if($load) {
          header('Location: 'index.php'');
      }
      else {
          echo "There was an error!";
      }
  }
?>



