<?php
//connecting to the server
$connection = mysqli_connect("localhost", "root", "", "crewsmart");

//confirming connection
if ($connection) {
    echo "Connection status: confirmed ";
}
?>

<?php
if (isset($_POST['first_name'])) {
    //first table
    $first_name = $_POST['first_name'];
    $surname = $_POST['surname'];
    $nationality = $_POST['nationality'];
    //second table 
    $address_line_1 = $_POST['address_line_1'];
    $address_line_2 = $_POST['address_line_2'];
    $telephone = $_POST['telephone'];
    $e_mail = $_POST['e_mail'];


    $query1 = "INSERT INTO users(first_name, surname, nationality) VALUES ('{$first_name}', '{$surname}', '{$nationality}') ";
    $create_post_query_1 = mysqli_query($connection, $query1);

    if (!$create_post_query_1) {
        die("QUERY FAILURE: " . mysqli_error($connection));
    }

    $last_id = mysqli_insert_id($connection);
  

    $query2 = "INSERT INTO users_details(user_id, address_line_1, address_line_2, telephone, e_mail) VALUES ('{$last_id}', '{$address_line_1}', '{$address_line_2}', '{$telephone}', '{$e_mail}' ) ";

    $create_post_query_2 = mysqli_query($connection, $query2);
    if (!$create_post_query_1) {
        die("QUERY FAILURE: " . mysqli_error($connection));
    }
}

?>


