<?php
//connecting to the server
$connection = mysqli_connect("localhost", "root", "", "crewsmart");

//confirming connection
if ($connection) {
    echo "Connection status: confirmed ";
}
?>

<?php

$query = "SELECT a.user_id, a.first_name, a.surname, a.nationality, b.address_line_1, b.details_id, b.user_id, b.address_line_2, b.telephone, b.e_mail FROM users AS a LEFT JOIN users_details AS b ON a.user_id = b.user_id";
$results = mysqli_query($connection, $query);
if (!$results) {
    die("QUERY FAILURE: " . mysqli_error($connection));
}

echo "<table>";

while ($row = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['surname'] . "</td>";
    echo "<td>" . $row['nationality'] . "</td>";
    echo "<td>" . $row['address_line_1'] . "</td>";
    echo "<td>" . $row['address_line_2'] . "</td>";
    echo "<td>" . $row['telephone'] . "</td>";
    echo "<td>" . $row['e_mail'] . "</td>";

    echo "</tr>";
}
echo "</table>";



?>
