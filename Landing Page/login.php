<?php
require 'dbkoneksi.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['psw'];
    
    $query_sql = "SELECT * FROM register WHERE email = :email AND password = :password";
    $stmt = $dbh->prepare($query_sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $result = $stmt->fetch();

    if($result) {
        header("Location: index.php");
    exit;
    } else {
        echo "<h1>Email atau Password anda salah</h1>";
    }

}
