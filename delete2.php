
<?php 
include_once "connection.php";
$db = new connection();
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $conn = $db->getConnection();
  $query = $conn->query("DELETE FROM studinfo WHERE Id = {$id}");
  $conn->close();
  
  header("Location: http://localhost/WT%20Proj.%201/index1.php");

}
?>
