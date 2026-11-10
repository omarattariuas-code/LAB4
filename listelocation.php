<?php
$host="localhost";
$db_user="root";
$db_pass="";
$db_name="clientoto";
// Create connection
$conn = new mysqli($host, $db_user, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT  * FROM locationn";
// Execute the SQL query
$result = $conn->query($sql);

// Process the result set
if ($result->num_rows > 0) {
  // Output data of each row
  echo "<table border=1 ><tr><th>immat</th><th>date_debue</th><th>date_final</th>
  <th>prix</th><th>number_jon</th><th>Total</th><th>client</th>
  <th>modifier</th><th>suprimer</th></tr>";
  while($row = $result->fetch_assoc()){

     
    echo "<tr>
    
    <td>". $row["immat"] . "</td>
   <td>". $row["date_debue"] . "</td>
   <td>". $row["date_final"] . "</td>
   <td>". $row["prix"] . "</td>
   <td>". $row["number_jon"] . "</td>
   <td>". $row["Total"] . "</td>
   <td>". $row["client"] . "</td>
   <td><a href='modifier.php?immat=". urldecode($row["immat"]) ."'Modifier</a>
   <td><a href='suprimer.php?immat=". urldecode($row["immat"]) ."'</a>
   
  
    </tr>"; 
  }
  
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>
