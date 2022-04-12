<?php

// tarkistuksia
if (!isset($_POST['username']) || !isset($_POST['password'])){
    $data = array(
        'error' => 'POST-dataa ei saatavilla!'
    );
    die();
}

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

include_once 'pdo-connect.php';

try{
    // Luodaan pdo-statement
    $stmt = $conn->prepare("INSERT INTO user (username, pwd) VALUES (:username, :pwd);");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':pwd', $password);
    if($stmt->execute() == false){
        $data = array(
            'error' => 'Failed!'
        );
    } else {
        $data = array(
            'success' => 'New user saved!'
        );
    }
}catch (PDOException $e) {
    if (strpos($e->getMessage(),'1062 Duplicate entry')){
        $data = array(
            'error' => 'User already exists!'
        );
    } else {
        $data = array(
            'error' => 'Failed!'
        );
    }      
}

header("Content-type: application/json;charset=utf-8");
echo json_encode($data);


