<?php
// tarkistuksia
if (!isset($_POST['username']) || !isset($_POST['password'])){
    echo 'tapahtui virhe, ei post-dataa saatavilla';
    die();
}

$username = $_POST['username'];
$password = $_POST['password'];

include_once 'pdo-connect.php';

// Luodaan pdo-statement
$stmt = $conn ->prepare("INSERT INTO user (username, pwd) VALUES (:username, :pwd);");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':pwd', $password);
$stmt_<execute();

echo 'tallennettu';