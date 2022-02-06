<?php
include_once "connection.php";
$db = new connection();
$hello = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];
$id = $_POST['id'];

try{
    $conn = $db->getConnection();
    $query = $conn->query("UPDATE studinfo SET Name = '{$hello}', Address = '{$address}',Class = '{$class}', Phone = '{$phone}' WHERE Id = '{$id}'");
    
    $conn->close();
    header("Location: http://localhost/WT%20Proj.%201/index1.php");
    // echo '{"res":1}';
}
catch(Exception $error){
    // echo '{"res":0}';
    echo $error;

}

?>

