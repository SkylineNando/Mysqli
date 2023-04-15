<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$json_data = '{"name": "John", "age": 30, "city": "New York"}';
$data = json_decode($json_data, true);

$data_string = mysqli_real_escape_string($conn, json_encode($data));

$sql = "INSERT INTO table_name (`json`) VALUES ('$data_string')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
