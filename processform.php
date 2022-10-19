<?php 
$conn = new PDO("mysql:host=localhost;dbname=myschool", "root", "");


if($_POST['name']!="" && $_POST['email']!=""){
    $name = $_POST['name'];
    $email = $_POST['email'];

$insert = $conn->prepare("insert into regajax (name, email) values (:n, :e)");

$insert->bindParam(':n', $name);
$insert->bindParam(':e', $email);

$insert->execute();


}



?>

