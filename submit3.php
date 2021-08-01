<?php
  $email = $_POST['Email'];
  $password = $_POST['password'];
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname="naycafe";
      $conn = new mysqli($servername,$username,$password,$dbname);
      
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully \n";
$passHash = password_hash($password, PASSWORD_DEFAULT);

$sql = "Insert into `login1` (`Email`,`password`) VALUES ('$email','$passHash')";

if ($conn->query($sql) === TRUE) {
	header('location: order.php');
    echo "Registered successfull";
	
}
 else {
    echo "Error:" .$sql. "<br>" . $conn->error;
}
$conn->close();
?>