<?php
      
  $name = $_POST['Name'];
  $fname = $_POST['FName'];
  $email = $_POST['Email'];
  $password = $_POST['Password'];
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

$sql = "Insert into `signup` (`Name`,`FName`,`Email`,`Password`) VALUES ('$name','$fname','$email','$passHash')";

if ($conn->query($sql) === TRUE) {
	header('location: login1.php');
    echo "Registered successfull";
	
}
 else {
    echo "Error:" .$sql. "<br>" . $conn->error;
}
$conn->close();
?>