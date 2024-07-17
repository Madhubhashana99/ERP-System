<?php
// Database configuration
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db";

// Create connection
$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemCode = $conn->real_escape_string($_POST['itemCode']);
    $itemName = $conn->real_escape_string($_POST['itemName']);
    $itemCategory = $conn->real_escape_string($_POST['itemCategory']);
    $itemSubCategory = $conn->real_escape_string($_POST['itemSubCategory']);
    $quantity = $conn->real_escape_string($_POST['quantity']);
    $unitPrice = $conn->real_escape_string($_POST['unitPrice']);

    // Insert data into the database
    $sql = "INSERT INTO item (item_code, item_name, item_category, item_subcategory, quantity, unit_price)
            VALUES ('$itemCode', '$itemName', '$itemCategory', '$itemSubCategory', '$quantity', '$unitPrice')";

    if ($conn->query($sql) === TRUE) {
        echo "New item record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
