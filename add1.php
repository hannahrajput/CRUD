<?php include 'header1.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WT Proj.1</title>
</head>
<body>
  
    <h2>Add New Record</h2>
<form action="insert.php" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" required/>
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" required />
  </div>
  <div class="mb-3">
  <label for="class" class="form-label">Class</label>
  <select id="class" name="class" required>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
  </select>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" required />
  </div>
  <input type="submit" class="btn btn-secondary" value="Add" name="add">
</form> 

</body>
</html>