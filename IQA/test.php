<?php
  $company = $_POST['company'];
  $topic = $_POST['topic'];
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'results';
  // Create Connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  //Check Connection
  if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
  }
  $sql = "SELECT question, answer, difficulty, numasked from results WHERE company = '$company' OR topic = '$topic'";
  $data = mysqli_query($conn, $sql);
  $total = mysqli_num_rows($data);
  if($total != 0){
    while($row = $data->fetch_assoc()){
      echo "<tr><td>".$row['question']."</td><td>".$row['answer']."</td><td>".$row['difficulty']."</td><td>".$row['numasked']."</td><tr>";
    }
  }
?>
