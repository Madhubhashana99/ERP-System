<?php
//include("db.php");


$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db";
$conn = "";

try{
    $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
}
catch(mysqli_sql_exception){
    echo "Could not connected";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $contactNumber = $_POST['contactNumber'];
    $district = $_POST['district'];

    $sql = "INSERT INTO customer (title, first_name, last_name, contact_no, district)
            VALUES ('$title', '$firstName', '$lastName', '$contactNumber', '$district')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
