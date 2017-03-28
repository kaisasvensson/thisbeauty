<?php
require 'config.php';
require 'auth.php';
header('Content-Type: application/json');

$email = $_SESSION['email'];

if (isset($_POST['faddress'])) {
    $sql = "UPDATE `users` SET `address` = :vaddress, `zipcode` = :vzipcode, `city` = :vcity WHERE `email` = :vemail";
    $stm_update = $pdo->prepare($sql);
    $stm_update->execute(['vaddress' => $_POST['faddress'], 'vzipcode' => $_POST['fzipcode'], 'vcity' => $_POST['fcity'], 'vemail' => $email]);
    echo json_encode(true);
}
