<?php
// Get all polls from db
if (isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
} else{
    $user_id = false;
} 


include_once 'pdo-connect.php';

try {
    $stmt = $conn->prepare("SELECT id, topic, start, end, user_id FROM poll");

    if ($stmt->execute() == false){
        $data = array(
            'error' => 'Error occured!'
        );
    } else {
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $data = $result;
    }
} catch (PDOException $e) {
    $data = array(
        'error' => 'Error occured!'
    );   
}

header("Content-type: application/json;charset=utf-8");
echo json_encode($data);