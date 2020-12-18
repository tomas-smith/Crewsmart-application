<?php
//connecting to the server
$connection = mysqli_connect("localhost", "root", "", "crewsmart");

//confirming connection
if ($connection) {
  //  echo "Connection status: confirmed ";
}
?>

<?php

$query = "SELECT a.user_id, a.first_name, a.surname, a.nationality, b.address_line_1, b.details_id, b.user_id, b.address_line_2, b.telephone, b.e_mail FROM users AS a LEFT JOIN users_details AS b ON a.user_id = b.user_id";
$results = mysqli_query($connection, $query);
if (!$results) {
    die("QUERY FAILURE: " . mysqli_error($connection));
}



while ($row = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['surname'] . "</td>";
    echo "<td>" . $row['nationality'] . "</td>";

    echo "<td>";
    echo "<div class='dropdown'>";
    echo "<a class='btn btn-secondary dropdown-toggle' href='#' role='button' id='dropdownMenuLink1'
                        data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
    echo    "<i class='far fa-cog'></i> </a>";
    echo " <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
    echo    "<a class='dropdown-item' href='#'>Address: $row[address_line_1]</a>";
    echo    "<a class='dropdown-item' href='#'>$row[address_line_2]</a>";

    echo    "<a class='dropdown-item' href='#'> Telephone number: $row[telephone]</a>";
    echo    "<a class='dropdown-item' href='#'> Email: $row[e_mail]</a>";

    echo "    </div>";
    echo " </div>";
    echo "  </td>";

    echo "</tr>";
}




?>
