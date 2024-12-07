<?php 
$conn = new mysqli('sql309.infinityfree.com','if0_37856510','GXybtRjKfb','if0_37856510_domisoins');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
