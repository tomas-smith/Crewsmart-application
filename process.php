<?php
//connecting to the server
$connection = mysqli_connect("localhost", "root", "", "crewsmart");

//confirming connection
if($connection){
    echo "Connection status: confirmed ";
}
?>

<?php 
if (isset($_POST['first_name'])){
    print_r($_POST);
    //first table
    $first_name = $_POST['first_name'];
    $surname = $_POST['surname'];
    $nationality = $_POST['nationality'];
    //second table 
    $user_id = $_POST['user_id'];
    $address_line_1 = $_POST['address_line_1'];
    $address_line_2 = $_POST['address_line_2'];
    $telephone = $_POST['telephone'];
    $e_mail = $_POST['e_mail'];


    // $query1 = "INSERT INTO users(first_name, surname, nationality) VALUES ('{$first_name}', '{$surname}', '{$nationality}') ";
    // $query2 = "INSERT INTO user_details(user_id, address_line_1, address_line_2, telephone, e_mail) VALUES ('{$user_id}', '{$address_line_1}', '{$address_line_2}', '{$telephone}', '{$e_mail}' ) ";

    $mquery = "INSERT INTO users(first_name, surname, nationality) VALUES ('{$first_name}', '{$surname}', '{$nationality}'); INSERT INTO user_details(user_id, address_line_1, address_line_2, telephone, e_mail) VALUES ('{$user_id}', '{$address_line_1}', '{$address_line_2}', '{$telephone}', '{$e_mail}' );";
    // $create_post_query_1 = mysqli_query($connection,$query1);
    // if(!$create_post_query_1){
    //     die("QUERY FAILURE: ". mysqli_error($connection));
    // }

    // $create_post_query_2 = mysqli_query($connection,$query2);
    // if(!$create_post_query_1){
    //     die("QUERY FAILURE: ". mysqli_error($connection));
    // }

    $create_multi_query = mysqli_multi_query($connection, $mquery);
    if(!$create_multi_query){
            die("QUERY FAILURE: ". mysqli_error($connection));
        }



}

?>

