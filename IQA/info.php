<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'sub';
  // Create Connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  //Check Connection
  if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
  }
  $sql = "INSERT INTO subscriber(Name, Email) values ('$name', '$email')";
  $conn->query($sql);
  $conn->close();
 ?>
