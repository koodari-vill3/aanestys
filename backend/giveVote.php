<?php
// giveVote.php - save vote for option in db

if (!isset($_GET['id'])){
    header('Location: ../index.php');
}

$optionid = $_GET['id'];

include_once 'pdo-connect.php';

/* 
tarkistetaan ennen äänestystä seuraavat asiat:

onko käyttäjä äänestänyt kyseistä äänestysä

äänestystä voi edelleen äänestää


täytyy hakea tietoja poll taulusta
*/

$data = array();

try {
    $stmt = $conn->prepare("SELECT id, start, end
                            FROM poll
                            WHERE id = (
                                SELECT poll_id
                                FROM option
                                WHERE id = :optionid
                            );");
    $stmt->bindParam(":optionid", $optionid);

    if ($stmt->execute() == false){
        $data['error'] = 'Error occured!';
    } else {
        
        $poll = $stmt->fetch(PDO::FETCH_ASSOC);

        // haetaan äänestyksen id
        $pollid = $poll['id'];

        // selvitetään onko käyttäjä jo äänestänyt
        $cookie_name = "poll_$pollid";
        if (isset($_COOKIE[$cookie_name])){
            $data['warning'] = 'You already voted this poll';
        }
    }

    // jos ei tullut varoitusta niin voidaan tallentaa ääni
    if (!array_key_exists('warning',$data)){

        $stmt = $conn->prepare("UPDATE option SET votes = votes + 1 WHERE (id = :optionid);");
        $stmt->bindParam(':optionid', $optionid);
    
        if ($stmt->execute() == false){
            $data['error'] = 'Error occured!';
        } else {

            $data['success'] = 'Vote succesfull!';

            // asetetaan eväste
            $cookie_name = "poll_$pollid";
            $cookie_value = 1;
            setcookie($cookie_name, $cookie_value, time() + (86400*30), "/");

        }

    }
    
} catch (PDOException $e) {
    $data = array(
        'error' => 'Error occured!'
    );   
}

header("Content-type: application/json;charset=utf-8");
echo json_encode($data);