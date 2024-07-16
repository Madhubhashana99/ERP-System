<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Styled Table</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles for the table */
    table {
      margin: 20px auto;
      max-width: 80%;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #f9f9f9;
    }
    th, td {
      text-align: center;
      padding: 12px;
      vertical-align: middle;
    }
    thead th {
      background-color: #007bff;
      color: #fff;
    }
    tbody tr:nth-child(odd) {
      background-color: #f2f2f2;
    }
    tbody tr:nth-child(even) {
      background-color: #fff;
    }
    tbody tr:hover {
      background-color: #eaeaea;
    }
    .table-responsive {
      overflow-x: auto;
    }
    .btn-update {
      background-color: #ffc107;
      border-color: #ffc107;
      color: #fff;
    }
    .btn-update:hover {
      background-color: #e0a800;
      border-color: #d39e00;
    }
    .btn-delete {
      background-color: #dc3545;
      border-color: #dc3545;
      color: #fff;
    }
    .btn-delete:hover {
      background-color: #c82333;
      border-color: #bd2130;
    }
    /* Custom styles for the search input */
    .form-outline {
      margin: 20px auto;
      max-width: 500px;
    }
    .form-outline input[type="search"] {
      border: 1px solid #007bff;
      border-radius: 4px;
      padding: 10px 15px;
      font-size: 16px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .form-outline input[type="search"]::placeholder {
      color: #6c757d;
    }
    .form-outline input[type="search"]:focus {
      border-color: #0056b3;
      box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }
  </style>
</head>
<body>

<div class="form-outline" data-mdb-input-init>
  <input type="search" id="form1" class="form-control" placeholder="Search" aria-label="Search" />
</div>
  
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title (Mr/Mrs/Miss/Dr)</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">AContact number</th>
        <th scope="col">District</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <button class="btn btn-update btn-sm">Update</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
