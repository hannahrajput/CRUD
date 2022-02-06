<?php 
include 'header1.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WT Proj.1</title>

</head>
<body>
  <h2>Records</h2>
<form method="POST">
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
  
    <input type="submit" class="btn btn-secondary" value="Show" name="show"/>
  </div>
</form>
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">CLASS</th>
      <th scope="col">PHONE</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <?php 
  include_once "connection.php";

  if(isset($_POST['show'])){
    $db = new connection();
  $conn = $db->getConnection();
  $query = $conn->query("SELECT * FROM studinfo WHERE Class= '".$_POST['class']."'");
  if(mysqli_num_rows($query) > 0){
      while($row=mysqli_fetch_assoc($query)){
        // print_r($row);
  
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['Id']; ?></th>
      <td><?php echo $row['Name']; ?></td>
      <td><?php echo $row['Address']; ?></td>
      <td><?php echo $row['Class']; ?></td>
      <td><?php echo $row['Phone']; ?></td>
      <td><a href='edit1.php?id=<?php echo $row['Id'] ?>'>Edit</td>
      <td><a href='delete2.php?id=<?php echo $row['Id']?>'>Delete</td>

    </tr>
    
  </tbody> 
  <?php 
  
}
}
}
  ?>
</table>
</body>
</html>