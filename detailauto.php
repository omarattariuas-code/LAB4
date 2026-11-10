<?php



$host="localhost";
$db_user="root";
$db_pass="";
$db_name="clientoto";

$conn = new mysqli($host,$db_user,$db_pass,$db_name );

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$car=$_POST['car'] ??'';
$typ=$_POST['typ'] ??'';
$model=$_POST['model'] ??'';
$tax=$_POST['tax'] ??'';
$condit=$_POST['condit'] ?? '';
$immat=$_POST['immat'] ?? '';

$table="detalleoto";

$sql = "INSERT INTO detalleoto (car, typ, model ,tax,condit,immat)
VALUES ('$car','$typ','$model','$tax','$condit','$immat')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>