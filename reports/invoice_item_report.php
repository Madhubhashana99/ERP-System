<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice Report</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Invoice Report</h2>
  <form id="date-range-form" method="POST">
    <div class="row mb-3">
      <div class="col">
        <label for="start-date" class="form-label">Start Date</label>
        <input type="date" id="start-date" name="start_date" class="form-control" required>
      </div>
      <div class="col">
        <label for="end-date" class="form-label">End Date</label>
        <input type="date" id="end-date" name="end_date" class="form-control" required>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Generate Report</button>
  </form>
</div>

<div class="container mt-5">
  <h2>Report Results</h2>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Invoice No.</th>
          <th>Invoiced Date</th>
          <th>Customer Name</th>
          <th>Item Name</th>
          <th>Item Code</th>
          <th>Item Category</th>
          <th>Item Unit Price</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Database connection
            $db_server = "localhost";
            $db_user = "root";
            $db_pass = "";
            $db_name = "db";
            $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Function to fetch invoice items based on date range
            function fetchInvoiceItems($conn, $start_date, $end_date) {
                $sql = "SELECT i.invoice_no, i.date, c.first_name, c.last_name, c.title, 
                               it.item_code, it.item_category, it.unit_price, it.item_name
                        FROM invoice i
                        JOIN invoice_master im ON i.invoice_no = im.invoice_no
                        JOIN item it ON im.item_id = it.id
                        JOIN customer c ON i.customer = c.id
                        WHERE i.date BETWEEN '$start_date' AND '$end_date'
                        ORDER BY i.date DESC";

                $result = $conn->query($sql);

                $rows = [];
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $rows[] = $row;
                    }
                }

                return $rows;
            }

            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];

            // Fetch invoice items
            $invoice_items = fetchInvoiceItems($conn, $start_date, $end_date);

            // Display fetched data
            foreach ($invoice_items as $item) {
                echo "<tr>
                        <td>{$item['invoice_no']}</td>
                        <td>{$item['date']}</td>
                        <td>{$item['title']} {$item['first_name']} {$item['last_name']}</td>
                        <td>{$item['item_name']}</td>
                        <td>{$item['item_code']}</td>
                        <td>{$item['item_category']}</td>
                        <td>{$item['unit_price']}</td>
                      </tr>";
            }

            // Close connection
            $conn->close();
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
