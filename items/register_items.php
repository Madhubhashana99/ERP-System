<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Item Form</title>
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
      <label for="itemCode" class="form-label col-sm-2">Item Code</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="itemCode" name="itemCode" placeholder="Item Code" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="itemName" class="form-label col-sm-2">Item Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="itemName" name="itemName" placeholder="Item Name" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="itemCategory" class="form-label col-sm-2">Item Category</label>
      <div class="col-sm-10">
        <select class="form-select" id="itemCategory" name="itemCategory" required>
          <option value="" disabled selected>Select Item Category</option>
          <option value=""></option>
          <option value=""></option>
          <option value=""></option>
          <!-- Add more categories as needed -->
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="itemSubCategory" class="form-label col-sm-2">Item Sub-Category</label>
      <div class="col-sm-10">
        <select class="form-select" id="itemSubCategory" name="itemSubCategory" required>
          <option value="" disabled selected>Select Item Sub-Category</option>
          <!-- Sub-categories will be populated based on the selected category -->
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="quantity" class="form-label col-sm-2">Quantity</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="unitPrice" class="form-label col-sm-2">Unit Price</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="unitPrice" name="unitPrice" placeholder="Unit Price" step="0.01" required>
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
  
  <!-- Script to populate sub-categories based on selected category -->
  <script>
    document.getElementById('itemCategory').addEventListener('change', function() {
      var subCategorySelect = document.getElementById('itemSubCategory');
      var category = this.value;
      var subCategories = {
        electronics: ['Phones', 'Laptops', 'Headphones'],
        clothing: ['Men', 'Women', 'Children'],
        furniture: ['Sofas', 'Tables', 'Chairs']
        // Add more categories and their sub-categories as needed
      };

      // Clear existing options
      subCategorySelect.innerHTML = '<option value="" disabled selected>Select Item Sub-Category</option>';

      // Populate sub-category options
      if (category && subCategories[category]) {
        subCategories[category].forEach(function(subCategory) {
          var option = document.createElement('option');
          option.value = subCategory.toLowerCase();
          option.textContent = subCategory;
          subCategorySelect.appendChild(option);
        });
      }
    });
  </script>
</body>
</html>
