<?php include 'header1.php';
include_once "connection.php";
$db = new connection();
if(isset($_POST['delete'])){
  $id = $_POST['id'];
  $conn = $db->getConnection();
  $query = $conn->query("DELETE FROM studinfo WHERE Id = {$id}");
  $conn->close();
  header("Location: http://localhost/WT%20Proj.%201/index1.php");

}
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
<h2>Delete Record</h2>
<form method="POST">
  <div class="mb-3">
    <label for="id" class="form-label">Id</label>
    <input type="text" class="form-control" id="id" name="id" />
  </div>
  
    <input type="submit" class="btn btn-secondary" name="delete" value="Delete"/>
  </div>  
</body>
</html>