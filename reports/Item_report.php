<?php
// Establish database connection (replace with your credentials)
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

// SQL query to fetch item details
$sql = "SELECT DISTINCT item_name, item_category, item_subcategory, SUM(quantity) AS item_quantity
        FROM item
        GROUP BY item_name, item_category, item_subcategory
        ORDER BY item_name";

$result = $conn->query($sql);

$rows = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Item Report</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Item Report</h2>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Item Name</th>
          <th>Item Category</th>
          <th>Item Subcategory</th>
          <th>Item Quantity</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rows as $item): ?>
          <tr>
            <td><?php echo $item['item_name']; ?></td>
            <td><?php echo $item['item_category']; ?></td>
            <td><?php echo $item['item_subcategory']; ?></td>
            <td><?php echo $item['item_quantity']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
