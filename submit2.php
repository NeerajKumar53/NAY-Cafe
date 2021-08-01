<?php  

  $name = $_POST['Name'];
  $add = $_POST['Address'];
  $cont = $_POST['contact'];
  $catagory = $_POST['catagory'];
  $quant = $_POST['quantity'];
  $date = $_POST['Date_of_Delivery'];
  $loc = $_POST['Location'];
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname="naycafe";
      $conn = new mysqli($servername,$username,$password,$dbname);
      
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully \n";


$sql = "Insert into `orders` (`Name`,`Address`,`contact`,`catagory`,`quantity`,`Date_of_Delivery`,`Location`) VALUES ('$name','$add','$cont','$catagory','$quant','$date','$loc')";

if ($conn->query($sql) === TRUE) {
    header('location: index.php');
    echo "order successfull";
	
}
 else {
    echo "Error:" .$sql. "<br>" . $conn->error;
}
$conn->close();
?>