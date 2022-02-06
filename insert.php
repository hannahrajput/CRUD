<?php
include_once "connection.php";
$db = new connection();
$hello = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];

try{
    $conn = $db->getConnection();
    $query = $conn->query("INSERT INTO studinfo(Name,Address,Class,Phone) VALUES ('$hello','$address','$class','$phone') ");
    $conn->close();
    header("Location: http://localhost/WT%20Proj.%201/index1.php");
    // echo '{"res":1}';
}
catch(Exception $error){
    // echo '{"res":0}';
    echo $error;

}

?>
