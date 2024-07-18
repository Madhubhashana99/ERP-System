<?php
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

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id']) && isset($data['field']) && isset($data['value'])) {
    $id = $conn->real_escape_string($data['id']);
    $field = $conn->real_escape_string($data['field']);
    $value = $conn->real_escape_string($data['value']);

    $sql = "UPDATE item SET $field = '$value' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $conn->error]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid input']);
}

$conn->close();
?>
