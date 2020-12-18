<?php
//connecting to the server
$connection = mysqli_connect("localhost", "root", "", "crewsmart");

//confirming connection
if ($connection) {
    echo "Connection status: confirmed ";
}
?>

<?php 

$query = 'SELECT * FROM users';
$results = mysqli_query($connection,$query);

echo "<table>";

while($row = mysqli_fetch_array($results)) {
  echo"<tr>";
  echo "<td>" . $row['first_name'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['nationality'] . "</td>";
  echo"</tr>";
  
}
echo "</table>";



?>
