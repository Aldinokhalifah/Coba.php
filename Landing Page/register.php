<?php
require 'dbkoneksi.php';

$name = $_POST['name'];    
$password = $_POST['psw'];
$email = $_POST['email'];    

$query_sql = "INSERT INTO register (nama,password,email) VALUES (:name, :password, :email)";
$stmt = $dbh->prepare($query_sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':email', $email);
$stmt->execute();

if($stmt->rowCount() > 0) {
    header("Location: login1.html");
    exit;
} else {
    echo "<h1>Masukkan Nama, Email dan Password dengan benar</h1>";
}
?>
