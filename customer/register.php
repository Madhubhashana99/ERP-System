<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Test</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    form {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #f9f9f9;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      border-radius: 4px;
      font-size: 16px;
      padding: 10px 20px;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }
  </style>
</head>
<body>
  <form action="#" method="post">
    <div class="mb-3 row">
      <label for="title" class="form-label col-sm-2">Title</label>
      <div class="col-sm-10">
        <select class="form-select" id="title" name="title" required>
          <option value="" disabled selected>Select your title</option>
          <option value="Mr">Mr</option>
          <option value="Mrs">Mrs</option>
          <option value="Miss">Miss</option>
          <option value="Dr">Dr</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="firstName" class="form-label col-sm-2">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="lastName" class="form-label col-sm-2">Last Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="contactNumber" class="form-label col-sm-2">Contact Number</label>
      <div class="col-sm-10">
        <input type="tel" class="form-control" id="contactNumber" name="contactNumber" placeholder="Contact Number" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="district" class="form-label col-sm-2">District</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="district" name="district" placeholder="District" required>
      </div>
    </div>
    <div class="mb-3 row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
