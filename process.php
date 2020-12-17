<?php
//connecting to the server
$connection = mysqli_connect("localhost", "root", "", "crewsmart");

//confirming connection
if($connection){
    //echo "Connection status: confirmed ";
}
?>

<?php 
if (isset($_POST['first_name'])){
    print_r($_POST);

}

?>

