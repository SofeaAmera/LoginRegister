<?php
  $con = mysqli_connect("my_host", "my_user", "my_password", "my_db");
  
  $name = $_POST["name"];
  $phone_number = $_POST["phone_number"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  $statement = mysqli_prepare($con, "INSERT INTO user (name, phone_number, username, password) VALUES (?, ?, ?, ?)");
  mysqli_stmt_bind_param($statement, "ssis", $name, $phone_number, $username, $password);
  mysqli_stmt_execute($statement);
  
  $response = array();
  $response ["success"] = true;
  
  echo json_encode($response)
?>
