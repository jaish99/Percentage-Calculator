<?php
    include "sql.php";
  define("dbhost",'localhost');
  define("dbuser",'root');
  define("dbpass",'New@12345');

  $connection = mysqli_connect(dbhost, dbuser, dbpass);
   if(! $connection ) {
       echo '<script>alert("Could not connect:" . mysqli_error())</script>';
   }
  // echo '<script>alert("Database Connected successfully")</script>';
   $connection->query($createDB);
   mysqli_select_db($connection,"Testing");
?>