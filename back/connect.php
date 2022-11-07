<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $database = "bake";

   $con = mysqli_connect($host, $username, $password, $database );

   if(!$con){
    die("connection failed: ". mysqli_connect_error());
   }
   

?>