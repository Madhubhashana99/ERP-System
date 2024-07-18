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
          <th>Invoice Number</th>
          <th>Date</th>
          <th>Time</th>
          <th>Invoice No</th>
          <th>Customer</th>
          <th>Item Count</th>
          <th>Amount</th>
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

            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];

            $sql = "SELECT invoice_no, date, time, customer, item_count, amount 
                    FROM invoice 
                    WHERE date BETWEEN '$start_date' AND '$end_date'";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["invoice_no"] . "</td>
                            <td>" . $row["date"] . "</td>
                            <td>" . $row["time"] . "</td>
                            <td>" . $row["customer"] . "</td>
                            <td>" . $row["item_count"] . "</td>
                            <td>" . $row["amount"] . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }
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
