
<?php



$host="localhost";
$db_user="root";
$db_pass="";
$db_name="clientoto";

$conn = new mysqli($host,$db_user,$db_pass,$db_name );

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$client=$_POST['client'] ??'';
$immat=$_POST['immat'] ??'';
$datei=$_POST['date_debue'] ??'';
$datef=$_POST['date_final'] ??'';
$prix=$_POST['prix'] ?? '';
$nom=$_POST['number_jon'] ?? '';
$total=$_POST['total'] ?? '';



$sql = "INSERT INTO location (client, immat, date_debue ,date_final,prix,number_jon,Total)
VALUES ('$client','$immat','$datei','$datef','$prix','$nom','$total')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
