<?php 
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "ratingdb";

  $dns = "mysql:host=$host;dbname=$db";

  $link = new PDO($dns, $user, $password);
  