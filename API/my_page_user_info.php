<?php
require 'config.php';
require 'auth.php';
header('Content-Type: application/json');

$email = $_SESSION['email'];

$stm_select = $pdo->prepare('SELECT * FROM `users` WHERE email = :email');
$stm_select->execute(['email' => $email]);
$resultat = array();

foreach($stm_select as $row) {
    $resultat[] = $row;
}
echo json_encode($resultat);
