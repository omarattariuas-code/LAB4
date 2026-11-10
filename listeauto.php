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
$sql = "SELECT  * FROM detalleoto";
// Execute the SQL query
$result = $conn->query($sql);
// Process the result set
if ( $result->num_rows > 0) {
  // Output data of each row
  echo "<table border=40><tr><th>car</th><th>type</th><th>model</th>
  <th>tax</th><th>condit</th><th>immat</th></tr>";
  while($row = $result->fetch_assoc()){  
    echo "<tr>
    <td>". $row["car"] . "</td>
   <td>". $row["typ"] . "</td>
   <td>". $row["model"] . "</td>
   <td>". $row["tax"] . "</td>
   <td>". $row["condit"] . "</td>
   <td>". $row["immat"] . "</td>
    </tr>";

  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
