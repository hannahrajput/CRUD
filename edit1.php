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
<h2>Edit Record</h2>

<?php 
include_once "connection.php";
 if(isset($_GET['id']))
 {
   $db = new connection();
   $conn = $db->getConnection();
   $query = $conn->query("SELECT * FROM studinfo WHERE Id='".$_GET['id']."'");
   $conn->close();
   if(mysqli_num_rows($query)>0){
     while($row = mysqli_fetch_assoc($query)){
      // print_r($row);

?>

<form action="update2.php" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="hidden" name="id" value="<?php echo $row['Id'] ?>"/>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['Name'] ?>"required/>
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['Address'] ?>" required />
  </div>
  <div class="mb-3">
  <label for="class" class="form-label">Class</label>
  <select id="class" name="class" value="<?php echo $row['Class'] ?>" required>
      <option>1</option>
  </select>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $row['Phone'] ?>"required />
  </div>
  <input type="submit" class="btn btn-secondary" value="Update" name="update">
</form> 
<?php
};
     
}
} ?>

</body>
</html>