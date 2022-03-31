<?php
// tarkistuksia
if (!isset($_POST['username']) || !isset($_POST['password'])){
    echo 'tapahtui virhe, ei post-dataa saatavilla';
    die();
}

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

include_once 'pdo-connect.php';

// Luodaan pdo-statement
$stmt = $conn->prepare("INSERT INTO user (username, pwd) VALUES (:username, :pwd);");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':pwd', $password);
if($stmt->execute() == false){
    echo 'tallennus epäonnistui';
} else {
    echo 'tallennettu';
}

